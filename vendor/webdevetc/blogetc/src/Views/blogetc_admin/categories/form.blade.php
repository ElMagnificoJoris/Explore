<script>
    SHOULD_AUTO_GEN_SLUG = false;

    /* Generate the slug field, if it was not touched by the user (or if it was an empty string) */
    function populate_slug_field() {

//        alert("A");
        var cat_slug = document.getElementById('category_slug');

        if (cat_slug.value.length < 1) {
            // if the slug field is empty, make sure it auto generates
            SHOULD_AUTO_GEN_SLUG = true;
        }

        if (SHOULD_AUTO_GEN_SLUG) {
            // the slug hasn't been manually changed (or it was set above), so we should generate the slug
            // This is done in two stages - one to remove non words/spaces etc, the another to replace white space (and underscore) with a -
            cat_slug.value =document.getElementById("category_category_name").value.toLowerCase()
                    .replace(/[^\w-_ ]+/g, '') // replace with nothing
                    .replace(/[_ ]+/g, '-') // replace _ and spaces with -
                    .substring(0,99); // limit str length

        }

    }
</script>
<div class="form-group">
    <label for="category_category_name">Nom</label>

    <input type="text"
           class="form-control"
           id="category_category_name"
           oninput="populate_slug_field();"
           required
           aria-describedby="category_category_name_help"
           name='category_name'
           value="{{old("category_name",$category->category_name)}}"
    >

    <small id="category_category_name_help" class="form-text text-muted">Le nom de la catégorie</small>
</div>


<div class="form-group">
    <label for="category_slug">Lien web</label>
    <input
            maxlength='100'
            pattern="[a-zA-Z0-9-]+"
            type="text"
            required
            class="form-control"
            id="category_slug"
            oninput="SHOULD_AUTO_GEN_SLUG=false;"
            aria-describedby="category_slug_help"
            name='slug'
            value="{{old("slug",$category->slug)}}"
    >

    <small id="category_slug_help" class="form-text text-muted">
        Caractères autorisés: lettres, nombres et tirets. Le lien, 
        (ex: {{route("blogetc.view_category","")}}/<u><em>cette_partie</em></u>) Se doit d'être unique (deux catégories ne peuvent
        pas partager le même URL).

    </small>
</div>


<div class="form-group">
    <label for="category_description">Description de la catégorie (optionnel)</label>
    <textarea name='category_description'
              class='form-control'
    id='category_description'>{{old("category_description",$category->category_description)}}</textarea>

</div>

<script>
    if (document.getElementById("category_slug").value.length < 1) {
        SHOULD_AUTO_GEN_SLUG = true;
    } else {
        SHOULD_AUTO_GEN_SLUG = false; // there is already a value in #category_slug, so lets pretend it was changed already.
    }
</script>
