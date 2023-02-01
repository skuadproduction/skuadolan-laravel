<div class="row">
    <div class="col">
        <section id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4" v-for="aFeed in feed">
                        <div class="card">
                            <img v-bind:src="aFeed.thumbnail" alt="" class="card-img-top" />
                            <div class="card-body">
                                <h5 class="card-title">{{ aFeed.title }}</h5>
                                <p>{{ formatDate(aFeed.pubDate) }}</p>
                                <p class="card-text" v-html="formatDescription(aFeed)"></p>
                                <a href="" class="btn btn-outline-success btn-sm">Read More</a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>