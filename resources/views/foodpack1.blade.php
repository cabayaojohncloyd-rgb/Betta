<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Donate</title>
</head>

<body>

    @include('partials.navbar')




    <section class="foodpack-section">
        <div class="container">

            <div class="foodpack-heading">
                <p>FOOD PACKS</p>
                <h1>HOW WOULD YOU LIKE TO PROVIDE FOOD PACKS?</h1>
            </div>

            <div class="row justify-content-center g-4">

                <!-- Donate Goods -->
                <div class="col-lg-5 col-md-6">
                    <div class="foodpack-card"
                        data-type="goods"
                        data-title="Donate Goods"
                        data-description="You will give food and essential items (rice, canned goods, noodles, etc.) that BETTA will include in food packs.">

                        <div class="foodpack-image">
                            <img src="{{ asset('images/foodpacks/donate-goods.png') }}"
                                alt="Food and essential items for donation"
                                loading="lazy">
                        </div>

                        <div class="foodpack-body">
                            <h2>DONATE GOODS</h2>

                            <p>
                                Give food and essential items that
                                can be included in food packs.
                            </p>

                            <a href="{{ route('foodpack2', ['type' => 'goods']) }}" class="foodpack-btn">
                                Donate Goods →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Fund Food Packs -->
                <div class="col-lg-5 col-md-6">
                    <div class="foodpack-card"
                        data-type="fund"
                        data-title="Fund Food Packs"
                        data-description="You will send money, and BETTA will purchase the food needed for the food packs.">

                        <div class="foodpack-image">
                            <img src="{{ asset('images/foodpacks/fund-food-packs.png') }}"
                                alt="Funding food packs"
                                loading="lazy">
                        </div>

                        <div class="foodpack-body">
                            <h2>FUND FOOD PACKS</h2>

                            <p>
                                Send money and BETTA purchases
                                the food needed for food packs.
                            </p>

                            <a href="{{ route('fund', ['type' => 'fund']) }}" class="foodpack-btn">
                                Fund Food Packs →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Confirmation Modal -->
                <div class="confirm-overlay" id="confirmOverlay" aria-hidden="true">
                    <div class="confirm-modal" role="dialog" aria-modal="true" aria-labelledby="confirmTitle">
                        <h3 id="confirmTitle"></h3>
                        <p id="confirmText"></p>

                        <div class="confirm-actions">
                            <button type="button" class="confirm-cancel" id="confirmCancel">Go Back</button>
                            <button type="button" class="confirm-proceed foodpack-btn" id="confirmProceed">Continue</button>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {

                        const cards = document.querySelectorAll('.foodpack-card');
                        const overlay = document.getElementById('confirmOverlay');
                        const titleEl = document.getElementById('confirmTitle');
                        const textEl = document.getElementById('confirmText');
                        const cancelBtn = document.getElementById('confirmCancel');
                        const proceedBtn = document.getElementById('confirmProceed');

                        let pendingUrl = null;
                        let pendingType = null;

                        // 2. Click animation
                        function animateCard(card) {
                            card.classList.remove('clicked');
                            void card.offsetWidth; // restarts the animation if clicked again
                            card.classList.add('clicked');
                        }

                        // 3. Highlight the chosen donation type
                        function selectCard(card) {
                            cards.forEach(c => c.classList.remove('selected'));
                            card.classList.add('selected');
                        }

                        // 1. Open the confirmation modal
                        function openModal(card, url) {
                            pendingUrl = url;
                            pendingType = card.dataset.type;

                            titleEl.textContent = card.dataset.title;
                            textEl.textContent = card.dataset.description;

                            overlay.classList.add('show');
                            overlay.setAttribute('aria-hidden', 'false');
                        }

                        function closeModal() {
                            overlay.classList.remove('show');
                            overlay.setAttribute('aria-hidden', 'true');
                        }

                        // 4. Remember the selected option, then go to the next page
                        function proceed() {
                            try {
                                sessionStorage.setItem('donationType', pendingType);
                            } catch (e) {
                                /* storage unavailable, the ?type= URL still works */
                            }

                            window.location.href = pendingUrl;
                        }

                        // Attach click handling to every card
                        cards.forEach(function(card) {
                            const link = card.querySelector('.foodpack-btn');

                            link.addEventListener('click', function(e) {
                                e.preventDefault(); // stop instant navigation
                                animateCard(card);
                                selectCard(card);
                                openModal(card, link.href);
                            });
                        });

                        cancelBtn.addEventListener('click', closeModal);
                        proceedBtn.addEventListener('click', proceed);

                        // Close by clicking outside the modal
                        overlay.addEventListener('click', function(e) {
                            if (e.target === overlay) closeModal();
                        });

                        // Close with the Escape key
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') closeModal();
                        });
                    });
                </script>



</body>

</html>