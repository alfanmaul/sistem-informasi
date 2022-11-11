            <!DOCTYPE html>
            <!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
            <html lang="en" dir="ltr">
                <!-- head section -->
                @include('main/head')
                <!-- End head section -->
            <body>

                <!-- sidebar -->
            <div class="sidebar">
                @include('main/sidebar')
            </div>
                <!-- end sidebar -->

                <!-- Main -->
                @include('main/conten')
                <!-- End Main -->

            <!-- Script -->
            <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");
            let searchBtn = document.querySelector(".bx-search");

            closeBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("open");
                menuBtnChange();//calling the function(optional)
            });

            searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
                sidebar.classList.toggle("open");
                menuBtnChange(); //calling the function(optional)
            });

            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
            }
            </script>
            </body>
            </html>
            