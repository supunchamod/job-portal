<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Support\Str;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        // Define services
        $services = [
            'WordPress Development',
            'Java Development',
            'HTML To WordPress',
            'PHP Development',
            'UI/UX Design',
            'Laravel',
            'Magento 2.0'
        ];

        // Create services if they don't exist
        foreach ($services as $serviceName) {
            Service::firstOrCreate([
                'name' => $serviceName,
                'slug' => Str::slug($serviceName)
            ]);
        }

        $logos = ['assets/img/l-2.png', 'assets/img/l-3.png'];
        $logoPath = $logos[array_rand($logos)];

        // Sample company data
        $companies = [
            [
                'name' => 'Tech Solutions Inc.',
                'email' => 'contact@techsolutions.com',
                'location' => 'New York, USA',
                'company_size' => '500-1000',
                'established' => 'Jan 2010',
                'logo' => 'assets/img/l-2.png',
                'website' => 'https://techsolutions.com',
                'description' => 'Leading provider of enterprise software solutions.'
            ],
            [
                'name' => 'WebCraft Studios',
                'email' => 'hello@webcraft.com',
                'location' => 'San Francisco, USA',
                'company_size' => '100-200',
                'established' => 'Mar 2015',
                'logo' => 'assets/img/l-2.png',
                'website' => 'https://webcraft.com',
                'description' => 'Creative web development agency specializing in WordPress.'
            ],
            // Add more companies as needed
        ];

        foreach ($companies as $companyData) {
            $company = Company::create([
                'name' => $companyData['name'],
                'slug' => Str::slug($companyData['name']),
                'email' => $companyData['email'],
                'location' => $companyData['location'],
                'company_size' => $companyData['company_size'],
                'established' => $companyData['established'],
                'website' => $companyData['website'],
                'description' => $companyData['description'],
                'logo' => $logoPath  // You can add logo paths if you have them
            ]);

            // Attach random services to company
            $randomServices = Service::inRandomOrder()
                ->limit(rand(2, 5))
                ->pluck('id');
            $company->services()->attach($randomServices);
        }
    }

}
