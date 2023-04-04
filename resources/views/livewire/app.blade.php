
@php
    require_once(resource_path("imports/limitString.php"));
    $limiter = 400;
@endphp

<div class="w-full min-h-screen">
   
            
    @livewire("gallery",["articles"=>[
        [
            "article_id"=> 0,
            "image"=>"https://discoverymorocco.net/wp-content/uploads/2021/07/MOU_6485-e1534801237554.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)
        ],
        [
            "article_id"=> 1,
            "image"=>"https://article19.ma/accueil/wp-content/uploads/2019/10/Gouvernement-Maroc.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)

        ],
        [
            "article_id"=> 2,
            "image"=>"https://www.moroccojewishtimes.com/wp-content/uploads/2020/02/wahbi-1.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)

        ],
        [
            "article_id"=> 3,
            "image"=>"https://www.diplomatie.ma/sites/default/files/medias/background/xministre-bio_38.jpg.pagespeed.ic.wJC1tdsfm7.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)

        ],
        [
            "article_id"=> 4,
            "image"=>"https://www.lavieeco.com/wp-content/uploads/2015/11/convention-entre-Credit-Agricole-du-Maroc-et-le-ministere-de-agriculture.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)

        ],
        [
            "article_id"=> 5,
            "image"=>"https://img.over-blog.com/500x299/2/25/98/74/01-fond-2013/ministere-justice-rabat-maroc.jpg",
            "title"=>"Title",
            "discription"=>limitString("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur illo recusandae voluptate vitae aliquid nobis culpa officiis veniam est dolores tenetur delectus provident pariatur, adipisci quis nam praesentium excepturi eveniet repellendus facilis labore. Aspernatur quos consectetur, soluta natus facere saepe ullam labore alias commodi fugiat, autem architecto aliquid neque eius quia assumenda hic officia quidem distinctio. Delectus neque explicabo quibusdam blanditiis sit magni aspernatur, possimus vitae id porro quisquam! Veritatis commodi optio quis earum odio repellendus fugiat, sunt aliquid iste quibusdam, mollitia quaerat beatae laborum excepturi minus sit accusamus doloremque quae nesciunt incidunt laboriosam eveniet dolorem asperiores! Numquam, facilis asperiores.", $limiter)

        ]
        
    ]
        
    ])

    
    @livewire("footer")




    <div wire:loading>
        Loading...
    </div>

</div>