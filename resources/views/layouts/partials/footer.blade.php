<footer id="footer" class="bg-secondary footer-text-light pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-white font-weight-400 mb-3">Important Links</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Contact US</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('privacyPolicies') }}">Privacy Policy</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('sitemap') }}">Site Map</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md mb-3 mb-md-0">
                <h4 class="text-3 text-white font-weight-400 mb-3">Policies</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('index') }}">Write a blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('categories') }}">categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('privacyPolicies') }}">Privacy Policy</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-3">
                <h4 class="text-3 text-white font-weight-400 mb-3">Subscribe Now</h4>
                <div class="form-group">
                    <div class="input-group newsletter">
                        <input class="form-control" placeholder="Your Email Address" name="newsletterEmail"
                            id="newsletterEmail" type="text">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit" data-toggle="tooltip"
                                data-original-title="Subscribe" id="subscribe">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </span>
                    </div>
                    <p id="message" class="form-text text-white-50">
                        Subscribe to receive latest post updates.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright pt-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg d-flex align-items-center">
                   
                </div>
                <div class="col-lg d-flex align-items-center align-items-lg-end flex-column">
                    <ul class="social-icons social-icons-colored">
                        <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/"
                                target="_blank" title="" data-original-title="Facebook"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/"
                                target="_blank" title="" data-original-title="Twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/"
                                target="_blank" title="" data-original-title="Linkedin"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/"
                                target="_blank" title="" data-original-title="Youtube"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/"
                                target="_blank" title="" data-original-title="Instagram"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#subscribe').click(function() {
                let email = $('#newsletterEmail').val();
                if (email == '') {
                    $('#message').html('Please enter your email address');
                    return false;
                }
                $.ajax({
                    url: '{{ route('subscription') }}',
                    type: 'POST',
                    data: {
                        'email': email,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        $('#message').html(data.message);
                        $('#newsletterEmail').val('');
                    },
                    error: function(data) {
                        $('#message').html(data.responseJSON.message);
                        $('#newsletterEmail').val('');
                    }
                });
            });
        });
    </script>
@endpush
