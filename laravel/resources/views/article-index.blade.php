<x-article-layout>
    <x-slot:title>
        Discussing Development, Tech, and Nerdish Shit | EricKoyanagi.com
    </x-slot>
    <header>
        <h1>Discussing Development, Tech, and Nerdish Shit</h1>
    </header>
    <section class="contents container-fluid">
        <h2>Yo. I'm Eric!</h2>
        <p>
            This blog is where I write various articles and guides. Why? Because I like being employed, and my
            resume can only communicate a slice of my experience and perspective. I know it's not super likely that
            an employer reads every line of my messy blog...but at the very least, maybe I'll get points for effort?
        </p>
        <p>
            More than that, I like writing. I like recording my experiences because it's oh-so-easy to forget details that
            might come in handy later in my career.
        </p>
        <p>
            Although I do love paying recurring fees just to host some text, this blog was engineered to be very fast and very
            cheap to host. My goal was to pay less than $1 per month. You can read about it in more detail <a href="/hosting-a-blog-on-s3-for-pennies-a-month.html">here</a>!
        </p>

        <h2>All Articles</h2>
        <ul class="main-article-list">
            @foreach ($articles as $article)
                <li>
                    <a href="./{{$article->slug}}" alt="{{$article->title}}">{{ $article->title }}</a>

                </li>
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