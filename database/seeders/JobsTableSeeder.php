<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        // Ensure there are companies, categories, and skills
        if (Company::count() === 0) {
            $this->call(CompaniesTableSeeder::class);
        }
        
        if (Category::count() === 0) {
            $this->call(CategoriesTableSeeder::class);
        }

        $jobTitles = [
            'Senior PHP Developer',
            'Laravel Backend Engineer',
            'WordPress Developer',
            'Frontend React Specialist',
            'UI/UX Designer',
            'DevOps Engineer',
            'Mobile App Developer',
            'Java Spring Boot Developer'
        ];

        $jobTypes = ['full-time', 'part-time', 'contract', 'freelance', 'internship'];
        $jobPlaces = ['remote', 'on-site', 'hybrid'];

        foreach ($jobTitles as $title) {
            $company = Company::inRandomOrder()->first();
            $category = Category::inRandomOrder()->first();

            $job = Job::create([
                'title' => $title,
                'slug' => Str::slug($title) . '-' . Str::random(6),
                'short_description' => 'Looking for an experienced ' . $title,
                'description' => $this->generateJobDescription($title),
                'requirements' => $this->generateJobRequirements(),
                'company_id' => $company->id,
                'category_id' => $category->id,
                'location' => $company->location,
                'job_place' => $jobPlaces[array_rand($jobPlaces)],
                'salary' => rand(40000, 120000),
                'type' => $jobTypes[array_rand($jobTypes)],
                'is_featured' => rand(0, 1),
                'is_urgent' => rand(0, 1),
                'is_active' => true,
                'deadline' => Carbon::now()->addDays(rand(10, 60))
            ]);
        }
    }

    protected function generateJobDescription($title)
    {
        return "## Job Description\n\n" .
               "We are seeking a skilled $title to join our growing team. " .
               "The ideal candidate will have experience in modern development practices " .
               "and a passion for creating high-quality software solutions.\n\n" .
               "## Responsibilities\n" .
               "- Develop and maintain web applications\n" .
               "- Collaborate with cross-functional teams\n" .
               "- Write clean, maintainable code\n" .
               "- Participate in code reviews";
    }

    protected function generateJobRequirements()
    {
        return "- Bachelor's degree in Computer Science or related field\n" .
               "- 3+ years of relevant experience\n" .
               "- Strong problem-solving skills\n" .
               "- Excellent communication abilities";
    }
}
