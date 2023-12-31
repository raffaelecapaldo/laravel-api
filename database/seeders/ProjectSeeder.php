<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Boolflix',
                'image_url' => 'https://i.ibb.co/1bL15zM/boolflix.png',
                'tags' => 'Vue, portfolio',
                'featured' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vite-boolflix'
            ],
            [
                'name' => 'Laravel Comics',
                'image_url' => 'https://wallpaperaccess.com/full/2379729.jpg',
                'tags' => 'Laravel',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vite-comics'
            ],
            [
                'name' => 'Campominato',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/js-campominato-dom'
            ],
            [
                'name' => 'PHP Badwords',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/php-badwords'
            ],
            [
                'name' => 'Vite YugiOh',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'featured' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vite-yu-gi-oh'
            ],
            [
                'name' => 'Vue Email List',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'featured' => true,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vue-email-list'
            ],
            [
                'name' => 'Oggetto prova',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/js-campominato-dom'
            ],
            [
                'name' => 'Oggetto prova 2',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'category_id' => '2',
                'tags' => 'Games',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/js-campominato-dom'
            ],
        ];
        foreach($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->slug = Str::slug($project['name'], '-');
            $newProject->image_url = $project['image_url'];
            $newProject->tags = $project['tags'];
            if (array_key_exists('featured', $project)) {
            $newProject->featured = 1;
            }
            $newProject->description = $project['description'];
            $newProject->repo_url = $project['repo_url'];
            if (array_key_exists('category_id', $project)) {
                $newProject->category_id = intval($project['category_id']);
            }
            else {
                $newProject->category_id = 1;
            }
            $newProject->save();
            $newProject->languages()->attach(rand(1,4));
        }
    }
}
