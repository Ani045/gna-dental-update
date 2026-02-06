<?php
$current_page = basename($_SERVER['PHP_SELF']);
function isActive($page_name, $current_page) {
    return ($current_page == $page_name) ? 'text-gnathos font-medium' : 'text-gray-600 hover:text-gnathos';
}
?>
<!-- Header -->
<header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm border-b z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-4 lg:px-8">
        <a href="<?php echo $path; ?>index.php"><img src="<?php echo $path; ?>assets/images/GNA Dental/Icons/logo.png" alt="Gnathos Dental" class="h-12"></a>
        <nav class="hidden lg:flex space-x-8 items-center">
            <a href="<?php echo $path; ?>index.php" class="<?php echo isActive('index.php', $current_page); ?>">Home</a>
            <a href="<?php echo $path; ?>about.php" class="<?php echo isActive('about.php', $current_page); ?>">About Us</a>
            <div class="relative group">
                <a href="#" class="text-gray-600 hover:text-gnathos font-medium flex items-center gap-1">Our Services <svg
                        class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg></a>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-[600px] bg-white rounded-xl shadow-2xl p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                    <h3 class="font-bold border-b pb-2 mb-4">Our Services</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="<?php echo $path; ?>dental-implant.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🦷</span>
                            <div>
                                <div class="font-semibold text-sm">Dental Implant</div>
                                <div class="text-xs text-gray-500">Permanent replacement</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>root-canal.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🔧</span>
                            <div>
                                <div class="font-semibold text-sm">Root Canal</div>
                                <div class="text-xs text-gray-500">Save natural tooth</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>dental-crowns.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🦷</span>
                            <div>
                                <div class="font-semibold text-sm">Dental Crowns & Bridges</div>
                                <div class="text-xs text-gray-500">Restore damaged teeth</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>oral-surgeries.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🏥</span>
                            <div>
                                <div class="font-semibold text-sm">Oral Surgeries</div>
                                <div class="text-xs text-gray-500">Surgical care</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>wisdom-tooth-removal.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🦷</span>
                            <div>
                                <div class="font-semibold text-sm">Wisdom Tooth Removal</div>
                                <div class="text-xs text-gray-500">Safe extraction</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>general-dentistry.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">🩺</span>
                            <div>
                                <div class="font-semibold text-sm">General Dentistry</div>
                                <div class="text-xs text-gray-500">Complete care</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>laser-dentistry.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">⚡</span>
                            <div>
                                <div class="font-semibold text-sm">Laser Dentistry</div>
                                <div class="text-xs text-gray-500">Advanced treatment</div>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>aligners.php"
                            class="flex items-start gap-3 p-3 rounded-lg hover:bg-gnathos/10"><span
                                class="text-xl">✨</span>
                            <div>
                                <div class="font-semibold text-sm">Aligners</div>
                                <div class="text-xs text-gray-500">Invisible braces</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="https://gnathosdental.in/blogs/" target="_blank"
                class="text-gray-600 hover:text-gnathos">Blog</a>
            <a href="<?php echo $path; ?>contact.php" class="<?php echo isActive('contact.php', $current_page); ?>">Contact Us</a>
        </nav>
        <div class="flex items-center gap-4">
            <a href="<?php echo $path; ?>contact.php"
                class="hidden md:inline-flex bg-gnathos text-white px-6 py-2.5 rounded-full font-semibold hover:bg-gnathos/90 transition">Book
                Appointment</a>
            <button id="mobile-menu-btn" class="lg:hidden p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t">
        <div class="container mx-auto px-4 py-4 space-y-4">
            <a href="<?php echo $path; ?>index.php" class="block text-gray-600 hover:text-gnathos font-medium">Home</a>
            <a href="<?php echo $path; ?>about.php" class="block text-gray-600 hover:text-gnathos font-medium">About Us</a>
            <div class="space-y-2">
                <p class="font-semibold text-gray-800">Our Services</p>
                <a href="<?php echo $path; ?>dental-implant.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Dental
                    Implant</a>
                <a href="<?php echo $path; ?>root-canal.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Root Canal</a>
                <a href="<?php echo $path; ?>dental-crowns.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Dental Crowns & Bridges</a>
                <a href="<?php echo $path; ?>oral-surgeries.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Oral
                    Surgeries</a>
                <a href="<?php echo $path; ?>wisdom-tooth-removal.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Wisdom
                    Tooth Removal</a>
                <a href="<?php echo $path; ?>general-dentistry.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">General
                    Dentistry</a>
                <a href="<?php echo $path; ?>laser-dentistry.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Laser
                    Dentistry</a>
                <a href="<?php echo $path; ?>aligners.php" class="block text-gray-600 hover:text-gnathos text-sm pl-4">Aligners</a>
            </div>
            <a href="https://gnathosdental.in/blogs/" target="_blank"
                class="block text-gray-600 hover:text-gnathos font-medium">Blog</a>
            <a href="<?php echo $path; ?>contact.php" class="block text-gray-600 hover:text-gnathos font-medium">Contact Us</a>
            <div class="border-t border-gray-100 pt-4 mt-6">
                <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-4">
                    <div class="text-gnathos font-bold text-lg mb-2">
                        Emergency Contact
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2 text-gray-700">
                            <span class="text-gnathos">📞</span>
                            <a href="tel:+919955708885" class="font-medium">
                                +91 9955 708 885
                            </a>
                        </div>
                        <div class="text-sm text-gnathos font-medium">
                            24/7 Emergency Available
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo $path; ?>contact.php"
                class="block bg-gnathos text-white px-6 py-3 rounded-full font-semibold text-center">Book
                Appointment</a>
        </div>
    </div>
</header>
