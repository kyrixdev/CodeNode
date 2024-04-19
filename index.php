<?php
// Path: TopBar.php
include 'TopHeader.php';
?>
<!-- <section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h2>Why Choose CodeNode ?</h2>
                <p class="w-80">At CodeNode, our focus is on server performance and customer experience rather then profitability. We have created top of the line systems and offers for you to enjoy the utmost performance when using our products.</p>
            </div>
            <div class="col-lg-6 ">
                <div class="row gap-m-4">
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/supportIcon.svg" alt="Support Icon" width="63" height="70">
                            <h4>24/7 Dedicated Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/instantIcon.svg" alt="Instant Activation Icon" width="90" height="70">
                            <h4>Instant Activation</h4>
                        </div>
                    </div>
                </div>
                <div class="row ms-4 mt-4 mm-0 gap-m-4">
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/ddosIcon.svg" alt="Ddos Protection Icon" width="70" height="70">
                            <h4>DDOS PROTECTION</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-us-item">
                            <img src="./assets/hardwareIcon.svg" alt="Premium Hardware Iocn" width="70" height="70">
                            <h4>Premium Hardware</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="our-services">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="d-flex row justify-content-center gap-5 py-5">
            <a href="/minecraft.php" class="service">
                <div class="service-img">
                    <picture>
                        <source srcset="./assets/camp_header.png" type="image/webp">
                        <img src="./assets/camp_header.png" alt="Minecraft Hosting" width="100" height="100">
                    </picture>
                </div>
                <div class="service-icon">
                    <img src="./assets/PC.png" alt="Minecraft Icon" width="100" height="100">
                </div>
                <div class="service-content">
                    <h4>Minecraft Hosting</h4>
                    <p>Starting at 4.99$</p>
                </div>
            </a>
            <a href="/palworld" class="service">
                <div class="service-img">
                    <picture>
                        <source srcset="./assets/palword.webp" type="image/webp">
                        <img src="./assets/palword.webp" alt="Minecraft Hosting" width="100" height="100">
                    </picture>
                </div>
                <div class="service-icon">
                    <img src="./assets/PAL_R02.webp" alt="PalWorld Icon" width="100" height="100">
                </div>
                <div class="service-content">
                    <h4>PalWorld Hosting</h4>
                    <p>Starting at 4.99$</p>
                </div>
            </a>
        </div>
        <h6 class="soon-services text-center">More Services Coming Soon</h6>
    </div>
</section>

<section class="features" id="features">
    <div class="container my-4">
        <div class="title">
            <p>why choose us?</p>
            <h2 class="section-title">Important Features of our services</h2>
        </div>
        <div class="features-rows">
            <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Performance Optimization</h4>
                            </div>
                            <p>We emphasise server performance in order to ensure that our systems are optimized for the best possible gaming experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Customer Support</h4>
                            </div>
                            <p>We pride ourself on providing excellent customer support, being available 24/7 to assist with any questions or issues regarding server operation or customization. We promise to ensure that your server is running optimally.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Strategic Locations</h4>
                            </div>
                            <p>To cater to a global audience, we have strategically placed our servers in the United States and The Netherlands. This placement is intended to provide the best latency and fast speeds for North American and European players, respectively.</p>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Custom solutions</h4>
                            </div>
                            <p>Recognizing that one size does not fit all, we offer personalized solutions tailored to the specific needs of our clients. If the standard offerings do not meet your requirements, we are willing to work with you to create a custom hosting package.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Dedicated IP</h4>
                            </div>
                            <p>We include a free dedicated IP with all plans, which simplifies the process for players to connect to your server. This feature is particularly beneficial for server owners who want to provide a stable and easily accessible connection for their community.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="feature-header">
                                <i data-lucide="hand-coins"></i>
                                <h4>Aditional services</h4>
                            </div>
                            <p>Beyond just server hosting, we at CodeNode provide free Discord bot hosting with each of our plans. This is an added benefit for gaming communities that use Discord as their primary communication tool, allowing us to help them integrate and manage their community more effectively.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="plans" id='plans'>
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
            <button class="nav-link" id="bundle-tab" data-bs-toggle="tab" data-bs-target="#bundle-tab-pane" type="button" role="tab" aria-controls="bundle-tab-pane" aria-selected="false">Bundles</button>
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
                            <p><i data-lucide="cpu" width="24" height="24"></i>1 CPU Core (Shared)</p>
                            <p><i data-lucide="memory-stick"></i>4 gb RAM (Dedicated)</p>
                            <p><i data-lucide="database"></i>25 gb Storage</p>
                            <p><i data-lucide="users"></i>10 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>8 Guaranteed Plugins Capacity</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 9.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/index.php?rp=/store/minecraft-servers/friends-and-family" class="btn btn-primary">Add to cart</a>
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
                            <p><i data-lucide="memory-stick"></i>10 gb RAM (Dedicated)</p>
                            <p><i data-lucide="database"></i>50 gb Storage</p>
                            <p><i data-lucide="users"></i>30 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>25 Guaranteed Plugins Capacity</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 24.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/index.php?rp=/store/minecraft-servers/mid-tier" class="btn btn-primary">Add to cart</a>
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
                            <p><i data-lucide="memory-stick"></i>16 gb RAM (Dedicated)</p>
                            <p><i data-lucide="database"></i>Unmetered Storage</p>
                            <p><i data-lucide="users"></i>50 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>50 Guaranteed Plugins Capacity</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 36.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/index.php?rp=/store/minecraft-servers/big-tier" class="btn btn-primary">Add to cart</a>
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
                            <p><i data-lucide="cpu"></i>2 CPU Core (Dedicated)</p>
                            <p><i data-lucide="memory-stick"></i>24 gb RAM (Dedicated)</p>
                            <p><i data-lucide="database"></i>Unmetered Storage</p>
                            <p><i data-lucide="users"></i>80 Guaranteed Player Slots</p>
                            <p><i data-lucide="blocks"></i>60 Guaranteed Plugins Capacity</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 59.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/index.php?rp=/store/minecraft-servers/mega-tier" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center text-light mt-2">Don't know what Guaranteed Players and Plugins mean? Check <a href="https://codenode-helpdesk.crisp.help/en/article/what-are-guaranteed-players-and-plugins-rmhpoo/" target="_blank">this article</a> out.</p>
        </div>
        <div class="tab-pane fade" id="bundle-tab-pane" role="tabpanel" aria-labelledby="bundle-tab" tabindex="0">
        <div class="row">
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>MINI BUNDLE</h4>
                            <p>Great for running two different game modes to play with your close ones</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="server"></i>2x Friends & Family Servers</p>
                            <p><i data-lucide="router"></i>1x Waterfall or Velocity Proxy*</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 18.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/cart.php?a=add&bid=1" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>BIG BUNDLE</h4>
                            <p>Ideal if you need a Hub server before joining the Main server</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="server"></i>1x Mid Tier Server</p>
                            <p><i data-lucide="server"></i>1x Big Tier Server</p>
                            <p><i data-lucide="router"></i>1x Waterfall or Velocity Proxy*</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 59.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/cart.php?a=add&bid=4" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="plan-item">
                        <div class="plan-item-header">
                            <h4>NETWORK BUNDLE</h4>
                            <p>Designed for medium or big communities with plugin-rich experiences in mind</p>
                        </div>
                        <div class="plan-item-body">
                            <p><i data-lucide="server"></i>2x Mid Tier Server Server</p>
                            <p><i data-lucide="server"></i>2x Big Tier Server Server</p>
                            <p><i data-lucide="router"></i>1x Waterfall or Velocity Proxy*</p>
                            <p><i data-lucide="network"></i>Includes Dedicated IP</p>
                        </div>
                        <div class="plan-item-footer">
                            <h3>$ 120.99/<span>Monthly</span></h3>
                            <a href="https://portal.codenode.gg/cart.php?a=add&bid=3" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center text-light mt-2">Don't know what Guaranteed Players and Plugins mean? Check <a href="https://codenode-helpdesk.crisp.help/en/article/what-are-guaranteed-players-and-plugins-rmhpoo/" target="_blank">this article</a> out.</p>
            <span class="span-notes">* Proxy Setup is included. Open a support ticket and CodeNode staff will link the two servers with a simple /server command, completely free of charge.</span>
        </div>
        <div class="tab-pane fade" id="dedicated-tab-pane" role="tabpanel" aria-labelledby="dedicated-tab" tabindex="0">
            <div class="col-lg-6 mx-auto">
                        <div class="plan-item">
                            <div class="plan-item-header">
                                <h4>Village</h4>
                                <p>Optimized for running a network with many game modes <br> Create up to 8 servers with your own dedicated resources.</p>
                            </div>
                            <div class="plan-item-body">
                                <p><i data-lucide="cpu"></i>4 Cores @ 4.0+ GHz</p>
                                <p><i data-lucide="memory-stick"></i>60 GB DDR4 @ 2666 MHz</p>
                                <p><i data-lucide="database"></i>500GB SSD Storage</p>
                                <p><i data-lucide="network"></i>8 Dedicated IP</p>
                            </div>
                            <div class="plan-item-footer">
                                <h3>$ 143.99/<span>Monthly</span></h3>
                                <a href="https://portal.codenode.gg/index.php?rp=/store/dedicated-node-hosting/villager-node" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
</section> -->
<section class="locations" id="locations">
    <div class="container">
        <div class="location-title">
            <p>Choose your location</p>
            <h2>We Offer locations all around the world</h2>
<!--             <button class="btn btn-primary mt-2" onclick="startPingTests()">Start Ping Tests</button>
            <div class="d-flex flex-row justify-content-center gap-3 mt-2">
                <div class="result" id="Location1"></div>
                <div class="result" id="Location2"></div>
            </div> -->
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-lg-12 row d-flex justify-content-center my-3">
                <div class="col-lg-4 my-2">
                    <div class="location-item col-lg-12">
                        <div class="live-locations">
                            <span>PREMIUM</span>
                        </div>
                        <div class="col-lg-12">
                            <img src="./assets/united_state_flag.webp" alt="" class="">
                            <h5>Dallas, USA</h5>
                        </div>
                        <ul class="p-0">
                            <li class="d-inline-flex me-2 gap-1"><i data-lucide="cpu"></i> CPU: 3.2-4 GHz</li>
                            <li class="d-inline-flex me-2 gap-1"><i data-lucide="memory-stick"></i> RAM: DDR4 2133 MHz</li>
                            <li class="d-block m-auto text-center gap-1"><i data-lucide="hard-drive"></i> SSD: SOFT RAID 1 (400 MB/s r/w)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 my-2  ">
                    <div class="location-item col-lg-12">
                        <div class="live-locations">
                            <span>PREMIUM</span>
                        </div>
                        <div class="col-lg-12">
                            <img src="./assets/europe_flag.png" alt="" class="">
                            <h5>Netherlands, EU</h5>
                        </div>
                        <ul class="p-0">
                            <li class="d-inline-flex me-2 gap-1"><i data-lucide="cpu"></i> CPU: 3.2-4 GHz</li>
                            <li class="d-inline-flex me-2 gap-1"><i data-lucide="memory-stick"></i> RAM: DDR4 2133 MHz</li>
                            <li class="d-block m-auto text-center gap-1"><i data-lucide="hard-drive"></i> SSD: SOFT RAID 1 (400 MB/s r/w)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
            <world-map class="map">
                <world-map-location top="41%" left="22%" label="Dallas, US"></world-map-location>
                <world-map-location top="31%" left="47.5%" label="Netherland, EU"></world-map-location>
            </world-map>
            </div>
        </div>
    </div>
</section>
<section class="contact-us">
    <div class="container">
        <p>Have any questions?</p>
        <div class="parrot">
            <h2>We're here to help!</h2>
            <img src="./assets/parrot.png" alt="Pirrot" width="100" height="100">
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="d-flex row col-lg-12 justify-content-center">
                <div class="col-lg-12 d-flex row gap-3 justify-content-center help-containers">
                    <a href="" class="contact-us-item">
                        <div class="contact-us-icon">
                            <img src="./assets/faDiscord.svg" alt="Discord" width="28" heigh="28">
                        </div>
                        <div class="contact-us-content">
                            <h5>Join Our Discord</h5>
                            <p>We can assist through our discord server!</p>
                        </div>
                    </a>
                    <a href="https://kb.codenode.gg/en/" class="contact-us-item">
                        <div class="contact-us-icon">
                        <i data-lucide="book-text" width="50" height="50"></i>
                        </div>
                        <div class="contact-us-content">
                            <h5>Knowledgebase</h5>
                            <p>Check our knowledgebase for common issues and solutions</p>
                        </div>
                    </a>
                    <a href="https://go.crisp.chat/chat/embed/?website_id=22b068e5-352b-4a08-aad3-e4bb97ae7ab9" class="contact-us-item">
                        <div class="contact-us-icon">
                            <i data-lucide="message-circle-heart" width="50" height="50"></i>
                        </div>
                        <div class="contact-us-content">
                            <h5>Live Chat</h5>
                            <p>Chat with us in real time</p>
                        </div>
                    </a>
                </div>
            </div>
<!--             <div class="col-lg-4">
                <img src="./assets/MCL_Modular_Keyart_P1_440x250.svg" alt="Pirrot" width="100" height="100">
            </div> -->
        </div>
    </div>
</section>


<?php
// Path: footer.php
include 'footer.php';
?>