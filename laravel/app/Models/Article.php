<?php

namespace App\Models;

use App\Services\AWSService;
use App\Services\StaticPageBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected string $markup;

    /**
     * @return string The complete HTML document published to AWS
     */
    public function publish() : string
    {
        $builder = new StaticPageBuilder();
        $awsUploader = new AWSService();

        // combines all attributes and the site's header/footer templates into a "blog" page
        $this->markup = $builder->build($this);

        // pushes the static page to AWS
        $awsUploader->publish(Str::slug($this->title, '-'), $this->markup);

        // rebuilds the article index
        $builder->rebuildArticleIndex();

        return $this->markup;
    }
}
