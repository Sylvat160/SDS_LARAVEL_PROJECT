        var parttwo = document.getElementById('parttwo');
        var ajoutE = document.getElementById('ajoutE');
        var parttree = document.getElementById('parttree');
        var ajoutT = document.getElementById('ajoutT');


        ajoutE.addEventListener('click', function() {
            parttwo.style.display = 'block';
            formE.style.display = 'block';
            parttree.style.display = 'none';
        }, false);



        ajoutT.addEventListener('click', function() {
            parttree.style.display = 'block';
            formT.style.display = 'block';
            parttwo.style.display = 'none';
        }, false);

        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $('#alert').delay(3000).fadeOut('slow');

        var alert = document.getElementById('alert');
        alert.addEventListener('setTimeout', );