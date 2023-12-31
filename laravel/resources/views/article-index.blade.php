<x-article-layout>
    <x-slot:title>
        Discussing Development, Tech, and Nerd Stuff! | EricKoyanagi.com
    </x-slot>
    <x-slot:css>
        .main-article-list { list-style: none }
        .main-article-list li {
            background: #f4f9fa;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 8px;
        }
        .main-article-list li article {
            min-height: auto;
        }
        .main-article-list li article p {
            margin-bottom: 0;
        }
        .main-article-list li article time {
            font-style: italic;
        }
        .main-article-list li a {
            text-decoration: none;
        }
        {{ $baked_css }}
    </x-slot:css>
    <header>
        <h1>Discussing Development, Tech, and Nerdish Shit</h1>
    </header>
    <section class="contents container-fluid">
        <h2>Yo. I'm Eric!</h2>
        <p>
            This blog is where I write various articles and guides about technology, programming, and whatever else I want.
        </p>
        <p>
            I like writing about my experiences because it's oh-so-easy to forget details that
            might come in handy later in my career. With so many copy/paste type articles trying to game Google, I hope that
            my ramblings can be useful to someone out there.
        </p>
        <p>
            Although I do love paying recurring fees just to host some text, this blog was engineered to be very fast and very
            cheap to host. My goal was to pay less than $1 per month. You can read about it in more detail <a href="/hosting-a-blog-on-s3-for-pennies-a-month.html">here</a>!
        </p>

        <h2>All Articles</h2>
        <ul class="main-article-list">
            @foreach ($articles as $article)
                @if ($article->published)
                <li>
                    <article>
                        <a href="./{{$article->slug}}" alt="{{$article->title}}">{{ $article->title }}</a>
                        <p>
                            Posted on
                            <time datetime="{{ $article->created_at }}">
                                {{ $article->created_at->format('m/d/Y') }}
                            </time>
                        </p>
                    </article>
                </li>
                @endif
            @endforeach
        </ul>

        <h2>About hiring me...</h2>
        <p>
            I prefer full time or contract work, but I do my best no matter what type of client. With extensive experience
            working with all sizes of startups, I aim to deliver high quality, practical, and profitable products.
        </p>
        <p>
            You can view my resume, portfolio, and contact info easily <a href="https://erickoyanagi.com">here</a>.
        </p>
        <p>
            I'm also available through these gig-style sites, but I am not going to pretend to have a lot of experience with
            these platforms. I don't know (or care to know) how to "game" these systems for maximum profit...call me old-fashioned,
            but I just want to do quality work and be paid fairly for it.
        </p>
        <p>
            <a href="https://www.fiverr.com/erickoyanagi">&raquo; My Fiverr</a><br/>
            <a href="https://www.upwork.com/freelancers/~01879bee1d3000411f">&raquo; My Upwork</a><br/>
        </p>

    </section>
</x-article-layout>