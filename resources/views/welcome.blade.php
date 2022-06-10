<html>

<head>
    <title>Bilangin.ai</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="#" class="image avatar"><img src="https://avatars.githubusercontent.com/u/14543407?v=4" alt="" /></a>
            <h1><strong>Reza Taqyuddin</strong>, <br>a Tech Enthusiast<br />Student of Magister Data Science and
                Artificial Intelligence
        </div>
        <a href="/login" class="btn">Login</a>
        <a href="/dashboard" class="btn">Dashboard</a>
        <a href="/apidocs" class="btn">API</a>
    </header>

    <!-- Main -->
    <div id="main">
        <section id="one">
            <header class="major">
                <h2>Bilangin.ai</h2>
            </header>
            <p>
                Bilangin.ai adalah project Sains Data dalam bidang NLP yang bertujuan untuk memetakan <i>Topik</i> dan
                Analisis Sentimen dari komentar-komentar di Universitas Sumatera Utara dengan menerapkan metode BERT
                (Bidirectional Encoding Representation from Transformers).
                <br><br>
                Project ini mengumpulkan data dengan 2 metode:
            <ul>
                <li>Manual Collection</li>
                <li>Scraping Komentar dari Sosial Media Universitas Sumatera Utara</li>
            </ul>

            Dosen pembimbing :
            <ol>
                <li><a href="https://direktori.usu.ac.id/profile/eyJpdiI6Im1OeUVTZjRzNjhVcFNXZnlyT1BUZFE9PSIsInZhbHVlIjoiUE9CRGVRXC9JZlBySGFIaG5pOGNROFE9PSIsIm1hYyI6IjMwZmVhMTFlZmYyNzliYjhiZDEwNzQ1Y2U3MDRiMGZiNmNlNTU0OWVjMmQ3MjYzYzFlYWQ0NDhkNGRhNjZhOWUifQ==" target="_blank">Prof.
                        Dr. Opim Salim Sitompul M.Sc</a></li>
                <li><a href="https://direktori.usu.ac.id/profile/eyJpdiI6Ikd4bDhlV3RNUzVQZENjbEVpRTlXckE9PSIsInZhbHVlIjoiK2xIRWZYajNTN3ZkOGtUREsrZSt5Zz09IiwibWFjIjoiMTRmNTA3NjRkYWE0ZjI0NDMyYTk5Nzk4ODI1NDk2MmMxYTY5NzBmNjdmYTg4ODA2ZTU0NmY1NjIyZWE4ZjEyMSJ9" target="_blank">Dr.
                        Amalia ST., M.T</a></li>
            </ol>
            </p>
        </section>


        <!-- Three -->
        <section id="three">
            <h2>Komentar</h2>
            <p>Kamu juga bisa mengirimkan komentar terhadap Universitas secara anonim pada form dibawah ini.</p>
            <div class='alert' id='review-body'></div>
            <div class="row">
                <div class="col-12 col-12-small">
                    <form method="post" action="#">
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-12"><textarea name="message" id="text-review" placeholder="Message" rows="4"></textarea></div>
                        </div>
                    </form>
                    <ul class="actions">
                        <li><input id='submit-review' type="submit" value="Kirim Komentar" /></li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <ul class="icons">
                <li><a href="https://github.com/rezataqyuddin" class="icon brands fa-github"><span class="label">Github</span></a></li>
                <li><a href="https://www.instagram.com/rezataqyuddinn/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="mailto: rezataqyuddin@usu.ac.id" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2021</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $("#submit-review").on("click", function(e) {
            e.preventDefault();
            $.ajax({
                url: "https://sidana.usu.ac.id/api/reviews",
                method: "post",
                data: {
                    review: $("#text-review").val(),
                },
                success: function(html) {
                    $("#review-body").html(html);
                    $("#text-review").val("");
                },
            });
        });
    </script>

</body>

</html>