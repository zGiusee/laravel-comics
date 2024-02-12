<footer>
    <!-- TOP FOOTER -->
    <div class="footer-bg py-5">
        <div class="container">

            <div class="row">

                <!-- LEFT TOP FOOTER SIDE -->
                <div class="col-6">
                    <div class="top-footer">
                        @foreach ($footer_lists as $list)
                            <ul>
                                <h3> {{ $list['list_title'] }}</h3>
                                @foreach ($list['list_links'] as $link)
                                    <li>
                                        <a href="">
                                            {{ $link }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                        {{-- <ul v-for="(list, index) in footerList" :key="index">
                            <h3>
                                {{ list.listTitle }}
                            </h3>
                            <li v-for="(link, index) in list.liLinks" :key="index">
                                <a :href="link.url">{{ link.linkName }}</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>

                <!-- RIGHT TOP FOOTER SIDE -->
                <div class="col-6">
                    <div class="d-flex justify-content-end ">
                        <img class="logo" src=" ../img/dc-logo-bg.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- BOTTOM FOOTER -->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">

                <!-- CREDITS SECTION -->
                <div class="col-6">
                    <div class="d-flex align-items-center h-100">
                        <a class="sign-up-button" href="">SIGN-UP-NOW!</a>
                    </div>
                </div>

                <!-- FOLLOW US BUTTON -->
                <div class="col-6">
                    <div class="d-flex justify-content-end align-items-center">
                        <span>FOLLOW US</span>
                        <ul>
                            @foreach ($socials as $social)
                                <li> <img src="{{ Vite::asset($social['socialLogo']) }}" alt="{{ $social['url'] }}">
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
