<div style='max-width:500px;margin:50px auto;' class='search-form-outer'>
    <form method='get' action='{{route("blogetc.search")}}' class='text-center'>
        <h4>Rechercher un post:</h4>
        <input type='text' name='s' placeholder='...' class='form-control' value='{{\Request::get("s")}}'>
        <input type='submit' value='Chercher' class='btn btn-primary m-2'>
    </form>
</div>