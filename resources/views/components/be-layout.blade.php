<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
    <link rel="stylesheet" href="/imws_css/imws_main.css">
    <link rel="stylesheet" href="/imws_css/imws_form.css">
    <link rel="stylesheet" href="/imws_css/imws_anim.css">
    <link rel="stylesheet" href="/imws_css/imws_responsive.css">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <x-backend-navbar/>

    <main>
        {{ $slot }}
    </main>
<x-be-footer/>
    <!-- JS -->
    <script>
        function toggleDropdown(element) {
            element.classList.toggle("active");
        }

   function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const main = document.querySelector(".main_contain");
    const header = document.querySelector(".dashboard_header");

    sidebar.classList.toggle("collapsed");

    if (sidebar.classList.contains("collapsed")) {
        main.style.marginLeft = "60px";
        main.style.width = "calc(100% - 60px)";
        header.style.marginLeft = "60px";
        header.style.width = "calc(100% - 60px)";
    } else {
        main.style.marginLeft = "240px";
        main.style.width = "calc(100% - 240px)";
        header.style.marginLeft = "240px";
        header.style.width = "calc(100% - 240px)";
    }
}
    </script>
</body>
</html>


