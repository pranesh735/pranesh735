<section id="features" class="py-5">

    <div class="container py-lg-5">

        <div class="text-center mb-5">

            <span class="text-primary fw-semibold">
                POWERFUL FEATURES
            </span>

            <h2 class="display-6 fw-bold mt-2">
                Everything You Need to Understand Your Spending
            </h2>

            <p class="text-secondary mx-auto section-description">
                Simple tools designed to help you take control of your
                everyday finances.
            </p>

        </div>


        <div class="row g-4">

            <?php

            $features = [

                [
                    'icon' => 'bi-wallet2',
                    'title' => 'Expense Tracking',
                    'description' => 'Track every purchase and keep your daily spending organized.'
                ],

                [
                    'icon' => 'bi-tags',
                    'title' => 'Smart Categories',
                    'description' => 'Organize your expenses into categories that make sense.'
                ],

                [
                    'icon' => 'bi-bullseye',
                    'title' => 'Monthly Budgets',
                    'description' => 'Set spending limits and stay on track every month.'
                ],

                [
                    'icon' => 'bi-lightbulb',
                    'title' => 'Financial Insights',
                    'description' => 'Discover where your money goes and identify spending patterns.'
                ],

                [
                    'icon' => 'bi-pie-chart',
                    'title' => 'Reports & Analytics',
                    'description' => 'Visualize your financial activity through simple reports.'
                ],

                [
                    'icon' => 'bi-flag',
                    'title' => 'Financial Goals',
                    'description' => 'Set savings targets and monitor your progress over time.'
                ]

            ];

            foreach ($features as $feature):

            ?>

                <div class="col-md-6 col-lg-4">

                    <div class="feature-card p-4 rounded-4 border h-100">

                        <div class="feature-icon mb-4">

                            <i class="bi <?= $feature['icon']; ?>"></i>

                        </div>

                        <h5 class="fw-bold">
                            <?= $feature['title']; ?>
                        </h5>

                        <p class="text-secondary mb-0">
                            <?= $feature['description']; ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>