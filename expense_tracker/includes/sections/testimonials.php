<section class="py-5 bg-light">

    <div class="container py-lg-5">

        <div class="text-center mb-5">

            <span class="text-primary fw-semibold">
                TESTIMONIALS
            </span>

            <h2 class="display-6 fw-bold mt-2">
                Simple Tools. Better Financial Habits.
            </h2>

        </div>


        <div class="row g-4">

            <?php

            $testimonials = [

                [
                    'name' => 'Arjun Kumar',
                    'role' => 'Freelancer',
                    'text' => 'I finally understand where my monthly income is going. The dashboard makes tracking expenses incredibly easy.'
                ],

                [
                    'name' => 'Priya Sharma',
                    'role' => 'Designer',
                    'text' => 'The simple categories and budget tracking helped me become much more consistent with my spending.'
                ],

                [
                    'name' => 'Rahul Mehta',
                    'role' => 'Entrepreneur',
                    'text' => 'I used to track everything manually. Having everything in one place makes managing my expenses much easier.'
                ]

            ];

            foreach ($testimonials as $testimonial):

            ?>

                <div class="col-md-4">

                    <div class="testimonial-card bg-white rounded-4 border p-4 h-100">

                        <div class="text-warning mb-3">

                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>

                        </div>


                        <p class="text-secondary mb-4">
                            "<?= $testimonial['text']; ?>"
                        </p>


                        <div class="d-flex align-items-center">

                            <div class="avatar">
                                <?= strtoupper(substr($testimonial['name'], 0, 1)); ?>
                            </div>

                            <div class="ms-3">

                                <h6 class="fw-bold mb-0">
                                    <?= $testimonial['name']; ?>
                                </h6>

                                <small class="text-secondary">
                                    <?= $testimonial['role']; ?>
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>