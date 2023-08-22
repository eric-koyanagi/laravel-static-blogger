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
    protected Article $previousArticle;
    protected Article $nextArticle;

    /**
     * Loads the previous article if not already loaded and returns it
     */
    public function getPrevious()
    {
        if (empty($this->previousArticle) && !empty($this->previous)) {
            $this->previousArticle = Article::find($this->previous);
        }

        return $this->previousArticle ?? null;
    }

    /**
     * Loads the next article if not already loaded and returns it
     */
    public function getNext()
    {
        if (empty($this->nextArticle) && !empty($this->next)) {
            $this->nextArticle = Article::find($this->next);
        }

        return $this->nextArticle ?? null;
    }

    // Create the slug attribute based on the title
    public function setSlug()
    {
        $this->slug = Str::slug($this->title, '-').'.html';
    }

    /**
     * @return string The complete HTML document published to AWS
     */
    public function publish() : string
    {
        $builder = new StaticPageBuilder();
        $awsUploader = new AWSService();

        // combines all attributes and the site's header/footer templates into a "blog" page
        $this->markup = $builder->build($this);

        // publishes (uploads) the article, then rebuilds the article index page
        $awsUploader->publish($this->slug, $this->markup);
        $awsUploader->publish('index.html', $builder->buildArticleIndex());

        return $this->markup;
    }
}
