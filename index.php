<?php
// Path: TopBar.php
include 'TopHeader.php';
?>
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h2>Why Choose CodeNode ?</h2>
                <p class="w-80">CodeNode is a leading provider of Minecraft Server Hosting. Discover why over 9,000,000 websites trust us for their hosting needs.</p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/supportIcon.svg" alt="">
                            <h4>24/7 Dedicated Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/instantIcon.svg" alt="">
                            <h4>Instant Activation</h4>
                        </div>
                    </div>
                </div>
                <div class="row ms-4 mt-4">
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/ddosIcon.svg" alt="">
                            <h4>DDOS PROTACTION</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/hardwareIcon.svg" alt="">
                            <h4>Premium Hardware</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container my-4">
        <div class="title">
            <p>what is included ?</p>
            <h2>Minecraft Servers Features</h2>
        </div>
        <div class="row justify-content-center my-5">
                <div class="col-lg-4">
                    <div class="feature-item">
                        <img src="./assets/SupportIconF.svg" alt="">
                        <h4>24/7 Semi-Managed Support</h4>
                        <p>Your server's success is our success. We're available 24/7 to answer any doubts you might have regarding how to operate or customize your server.</p>
                    </div>
                </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <img src="./assets/IPIconF.svg" alt="">
                    <h4>Free Dedicated IP</h4>
                    <p>We offer a free dedicated IP with all our plans , so you can have a unique experience with us</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <img src="./assets/ScalabiltyIconF.svg" alt="">
                    <h4>Reliability & Scalability</h4>
                    <p>Need more resources? We've got you and your community covered. If what you're looking for isn't currently offered, we can tailor a personalized solution just for your needs.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="feature-item">
                    <img src="./assets/EasyIconF.svg" alt="">
                    <h4>Easy-To-Use Services</h4>
                    <p>We invested heavily into our services research and development to be able to provide you with as much ease of use and peace of mind.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <img src="./assets/CheckIconF.svg" alt="">
                    <h4>Player & Plugin Guarantees</h4>
                    <p>Most hosting providers will give throw you into a pool of resources and call it a day. We, on the other hand, make sure our promises are met and your server is running optimally</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-item">
                    <img src="./assets/DiscordIconF.svg" alt="">
                    <h4>Discord Bot Hosting</h4>
                    <p>Your server's success is our success. and to help you manage your discord community we offer a free discord bot hosting with our plans</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="plans">
    <div class="container my-4">
        <div class="title">
            <p>Choose your plan</p>
            <h2>Our Minecraft Server Hosting Plans</h2>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="servers-tab" data-bs-toggle="tab" data-bs-target="#servers-tab-pane" type="button" role="tab" aria-controls="servers-tab-pane" aria-selected="true">Servers</button>
        </li>
        <li class="nav-item mx-1" role="presentation">
            <button class="nav-link" id="bundle-tab" data-bs-toggle="tab" data-bs-target="#bundle-tab-pane" type="button" role="tab" aria-controls="bundle-tab-pane" aria-selected="false">Bundels</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="dedicated-tab" data-bs-toggle="tab" data-bs-target="#dedicated-tab-pane" type="button" role="tab" aria-controls="dedicated-tab-pane" aria-selected="false">Semi-dedicated</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="servers-tab-pane" role="tabpanel" aria-labelledby="server-tab" tabindex="0">
            <div class="row">
                <div class="col-lg-3">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>FRIENDS & FAMILY</h4>
                            <p>Optimized for the best experience playing with your close ones</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>1 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>2 gb RAM</p>
                            <p><i data-lucide="database"></i>25 gb Storage</p>
                            <p><i data-lucide="users"></i>10 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>8 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 9.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>MID TIER</h4>
                            <p>Ideal for small communities with limited world sizes that need stable server performance</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>2 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>10 gb RAM</p>
                            <p><i data-lucide="database"></i>50 gb Storage</p>
                            <p><i data-lucide="users"></i>30 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>25 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 24.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>BIG TIER</h4>
                            <p>Designed for medium or big communities with plugin-rich experiences in mind</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>2 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>16 gb RAM</p>
                            <p><i data-lucide="database"></i>Unmetered Storage</p>
                            <p><i data-lucide="users"></i>50 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>50 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 36.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>MEGA TIER</h4>
                            <p>Tailored towards our most demanding customers. Enjoy smooth servers like never before!</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>2 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>24 gb RAM</p>
                            <p><i data-lucide="database"></i>Unmetered Storage</p>
                            <p><i data-lucide="users"></i>70 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>60 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 59.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="bundle-tab-pane" role="tabpanel" aria-labelledby="bundle-tab" tabindex="0">*
        <div class="row">
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>MINI BUNDLE</h4>
                            <p>Great for running two different game modes to play with your close ones</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>1 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>2 gb RAM</p>
                            <p><i data-lucide="database"></i>25 gb Storage</p>
                            <p><i data-lucide="users"></i>10 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>8 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 9.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>ULTRA BUNDLE</h4>
                            <p>Ideal if you need a Hub** server before joining the Main server</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>2 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>10 gb RAM</p>
                            <p><i data-lucide="database"></i>50 gb Storage</p>
                            <p><i data-lucide="users"></i>30 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>25 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 24.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>network bundle</h4>
                            <p>Designed for medium or big communities with plugin-rich experiences in mind</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="cpu"></i>2 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>16 gb RAM</p>
                            <p><i data-lucide="database"></i>Unmetered Storage</p>
                            <p><i data-lucide="users"></i>50 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>50 Guaranteed Plugins Capacity</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 36.99/<span>Monthly</span></h3>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="dedicated-tab-pane" role="tabpanel" aria-labelledby="dedicated-tab" tabindex="0">semi dedicated</div>
        </div>

</section>
<?php
// Path: footer.php
include 'footer.php';
?>