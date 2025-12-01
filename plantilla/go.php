<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
</head>

<body>
    <section id="go">
        <button class="toTop" id="toTop">
            <svg viewBox="0 0 24 24">
                <path d="m4 16 8-8 8 8"></path>
            </svg>
        </button>
    </section>
</body>
<script>/*<![CDATA[*/
    const toTop = (() => {
        let button = document.getElementById("toTop");
        window.onscroll = () => {
            button.classList[
                (document.documentElement.scrollTop > 200) ? "add" : "remove"
            ]("is-visible")
        }
        button.onclick = () => {
            window.scrollTo({
                top: 0, behavior: "smooth"
            })
        }
    })();/*]]>*/
</script>

</html>