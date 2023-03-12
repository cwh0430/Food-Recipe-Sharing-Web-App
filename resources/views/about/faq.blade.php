<style>
    .cd-faq__items {
        /* // on mibile, faq contents slides in from the right */
        position: fixed;
        height: 100%;
        width: 90%;
        top: 0;
        right: 0;
        transform: translateZ(0) translateX(100%);
        transition: transform .3s;
    }

    .cd-faq__items--slide-in {
        transform: translateX(0);
    }

    @include breakpoint(md) {
        .cd-faq {
            display: flex;
        }

        .cd-faq__categories {
            position: sticky;
            top: 20px;
            width: 200px;
        }

        .cd-faq__items {
            flex-grow: 1;
        }
    }
</style>

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
    <ul class="cd-faq__categories">
        <li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Basics</a></li>
        <li><a class="cd-faq__category truncate" href="#mobile">Mobile</a></li>
        <li>
            <!-- ... -->
        </li>
        <!-- ... -->
    </ul> <!-- cd-faq__categories -->

    <div class="cd-faq__items">
        <ul id="basics" class="cd-faq__group">
            <li class="cd-faq__title">
                <h2>Basics</h2>
            </li>
            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I change my password?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <!-- content here -->
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <a class="cd-faq__trigger" href="#0"><span>How do I sign up?</span></a>
                <div class="cd-faq__content">
                    <div class="text-component">
                        <!-- content here -->
                    </div>
                </div> <!-- cd-faq__content -->
            </li>

            <li class="cd-faq__item">
                <!-- ... -->
            </li>

            <!-- ... -->
        </ul> <!-- cd-faq__group -->

        <ul id="mobile" class="cd-faq__group">
            <!-- ... -->
        </ul> <!-- cd-faq__group -->

        <!-- ... -->
    </div> <!-- cd-faq__items -->

    <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

    <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
