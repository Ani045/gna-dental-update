<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Gnathos Multispeciality Dental Clinic</title>
    <meta name="description" content="Thank you for submitting your details. We will contact you soon.">
    <link rel="icon" href="assets/images/GNA Dental/Icons/fav.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>tailwind.config = { theme: { extend: { colors: { gnathos: '#00bbb0', dark: '#001817' } } } }</script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-emerald-50 to-white min-h-screen overflow-x-hidden">
    <?php $path = './'; include_once './includes/header.php'; ?>

    <!-- Thank You Content -->
    <div class="container mx-auto px-4 py-16 pt-32 relative">
        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-12 shadow-xl border-0">
                <div class="space-y-8">
                    <!-- Success Icon -->
                    <div class="mx-auto w-20 h-20 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <!-- Thank You Message -->
                    <div class="space-y-4">
                        <h1 class="text-4xl font-bold text-gray-900">Thank You!</h1>
                        <p class="text-xl text-gray-600 leading-relaxed">
                            We have successfully received your details and appreciate you contacting us.
                        </p>
                        <p class="text-lg text-gray-500">
                            Our team will review your information and get back to you shortly.
                            We look forward to helping you with your dental care needs.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-4">
                        <a href="index.php"
                            class="inline-flex items-center gap-2 bg-gnathos hover:bg-gnathos/90 text-white px-8 py-3 text-lg font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Return to Home
                        </a>

                        <p class="text-sm text-gray-500">
                            Need immediate assistance? Call us at
                            <a href="tel:+919955708885" class="text-gnathos hover:underline font-semibold">
                                +91 9955 708 885
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Decorative Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10">
            <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full bg-gnathos/10 opacity-50"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 rounded-full bg-green-100 opacity-50"></div>
        </div>
    </div>

    <?php include_once './includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>