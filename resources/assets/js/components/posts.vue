<template>
 <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{image}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{slug}}">
                                    <h2>{{subtitle}}</h2>
                                </a>
                                <p>{{body}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar"></i>{{create_at}}</a></li>
                                    <small>0</small>
                                    <li><a href="#"><i class="far fa-thumbs-up"></i>like</a></li>
                                </ul>
                            </div>
                        </article>
</template>

<script>
    export default {
       
     
        props:[
            'title','subtitle','created_at'
        ],
     
       
    }
</script>
