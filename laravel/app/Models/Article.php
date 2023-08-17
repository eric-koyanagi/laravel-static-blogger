<?php

namespace App\Models;

use App\Services\AWSService;
use App\Services\StaticPageBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected string $markup;

    public function publish()
    {
        $builder = new StaticPageBuilder();
        $awsUploader = new AWSService();

        // combines all attributes and the site's header/footer templates into a "blog" page
        $this->markup = $builder->build($this);
        //$awsUploader->publish(Str::slug($this->title, '-'), $this->markup);
    }
}
