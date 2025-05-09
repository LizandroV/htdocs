<section id="three" class="wrapper style1 fade-up">
    <div class="inner">
        <h2>Get in touch</h2>
        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
        <div class="split style1">
            <section>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="5"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><a href="" class="button submit" id="btnSubmit">Send Message</a></li>
                    </ul>
                </form>
            </section>
            <section>
                <ul class="contact">
                    <li>
                        <h3>Address</h3>
                        <span>12345 Somewhere Road #654<br />
                            Nashville, TN 00000-0000<br />
                            USA</span>
                    </li>
                    <li>
                        <h3>Email</h3>
                        <a href="#">user@untitled.tld</a>
                    </li>
                    <li>
                        <h3>Phone</h3>
                        <span>(000) 000-0000</span>
                    </li>
                    <li>
                        <h3>Social</h3>
                        <ul class="icons">
                            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</section>

<script>
    let button = document.getElementById('btnSubmit');
    button.addEventListener('click', function() {
        alert('Message sent!');
    });
</script>