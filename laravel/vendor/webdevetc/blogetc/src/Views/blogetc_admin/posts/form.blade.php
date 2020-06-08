<div class="form-group">
    <label for="blog_title">Titre</label>
    <input type="text" class="form-control" required id="blog_title" aria-describedby="blog_title_help" name='title'
           value="{{old("title",$post->title)}}">
    <small id="blog_title_help" class="form-text text-muted">Le titre du blog post</small>
</div>

<div class="form-group">
    <label for="blog_subtitle">Sous-titre</label>
    <input type="text" class="form-control" id="blog_subtitle" aria-describedby="blog_subtitle_help" name='subtitle'
           value='{{old("subtitle",$post->subtitle)}}'>
    <small id="blog_subtitle_help" class="form-text text-muted">Le sous-titre du blog post (optionnel)</small>
</div>


<div class='row'>


    <div class='col-sm-12 col-md-4'>


        <div class="form-group">
            <label for="blog_slug">Lien web</label>
            <input type="text" class="form-control" id="blog_slug" aria-describedby="blog_slug_help" name='slug'
                   value="{{old("slug",$post->slug)}}">
            <small id="blog_slug_help" class="form-text text-muted">l'URL (laisser vide pour une génération automatique) -
                ex: {{route("blogetc.single","")}}/<u><em>cette_partie</em></u></small>
        </div>

    </div>
    <div class='col-sm-6 col-md-4'>


        <div class="form-group">
            <label for="blog_is_published">Publier?</label>

            <select name='is_published' class='form-control' id='blog_is_published'
                    aria-describedby='blog_is_published_help'>

                <option @if(old("is_published",$post->is_published) == '1') selected='selected' @endif value='1'>
                    Oui
                </option>
                <option @if(old("is_published",$post->is_published) == '0') selected='selected' @endif value='0'>
                    Non
                </option>

            </select>
            <small id="blog_is_published_help" class="form-text text-muted">Est-ce qu'il doit être publié? Si non, alors il
                ne sera visible que par vous.
            </small>
        </div>

    </div>
    <div class='col-sm-6 col-md-4'>

        <div class="form-group">
            <label for="blog_posted_at">Posté le</label>
            <input type="text" class="form-control" id="blog_posted_at" aria-describedby="blog_posted_at_help"
                   name='posted_at'
                   value="{{old("posted_at",$post->posted_at ?? \Carbon\Carbon::now())}}">
            <small id="blog_posted_at_help" class="form-text text-muted">La date de publication. Si cette valeur est
                supérieure
                à cet instant: ({{\Carbon\Carbon::now()}}) alors il ne sera pas (encore) publié. Cette date doit être sous ce format: <code>AAAA-MM-JJ
                    HH:MM:SS</code>
            </small>
        </div>


    </div>
</div>


<div class="form-group">
    <label for="blog_post_body">Corps du post
        @if(config("blogetc.echo_html"))
            (HTML)
        @else
            (Html échappé)
        @endif

    </label>
    <textarea style='min-height:600px;' class="form-control" id="blog_post_body" aria-describedby="blog_post_body_help"
              name='post_body'>{{old("post_body",$post->post_body)}}</textarea>


    <div class='alert alert-danger'>
        Veuillez noter que tout HTML présent (y compris du JS) sera entre guillemets (sans être échappé)
    </div>
</div>




@if(config("blogetc.use_custom_view_files",true))
    <div class="form-group">
        <label for="blog_use_view_file">Fichier de vue personnalisée</label>
        <input type="text" class="form-control" id="blog_use_view_file" aria-describedby="blog_use_view_file_help"
               name='use_view_file'
               value='{{old("use_view_file",$post->use_view_file)}}'>
        <small id="blog_use_view_file_help" class="form-text text-muted">Optionnel - Si vous rentrez quelque chose ici, alors ça
            tentera de changer <code>view("custom_blog_posts." . $use_view_file)</code>. Vous devez créer ce fichier dans
            /resources/views/custom_blog_posts/FILENAME.blade.php.
        </small>
    </div>
@endif



<div class="form-group">
    <label for="blog_seo_title">SEO: balise {{"<title>"}} (optionnel)</label>
    <input class="form-control" id="blog_seo_title" aria-describedby="blog_seo_title_help"
              name='seo_title' tyoe='text' value='{{old("seo_title",$post->seo_title)}}' >
    <small id="blog_seo_title_help" class="form-text text-muted">Entrez une valeur pour la balise {{"<title>"}}. Si rien n'est rentré le titre sera le même que celui du post (optionnel)</small>
</div>

<div class="form-group">
    <label for="blog_meta_desc">Meta Desc (optionnel)</label>
    <textarea class="form-control" id="blog_meta_desc" aria-describedby="blog_meta_desc_help"
              name='meta_desc'>{{old("meta_desc",$post->meta_desc)}}</textarea>
    <small id="blog_meta_desc_help" class="form-text text-muted">Meta description (optionnel)</small>
</div>

<div class="form-group">
    <label for="blog_short_description">Courte Desc (optionnel)</label>
    <textarea class="form-control" id="blog_short_description" aria-describedby="blog_short_description_help"
              name='short_description'>{{old("short_description",$post->short_description)}}</textarea>
    <small id="blog_short_description_help" class="form-text text-muted">Courte description (optionnel - seulement utile si utilisé dans vos vues template)</small>
</div>

@if(config("blogetc.image_upload_enabled",true))

    <div class='bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border'>
        <style>
            .image_upload_other_sizes {
                display: none;
            }
        </style>
        <h4>Images</h4>


        @foreach(config("blogetc.image_sizes") as $size_key =>$size_info)
            <div class="form-group mb-4 p-2
        @if($loop->iteration>1)
                    image_upload_other_sizes
            @endif
                    ">
                @if($post->has_image($size_info['basic_key']))
                    <div style='max-width:55px;  ' class='float-right m-2'>
                        <a style='cursor: zoom-in;' target='_blank' href='{{$post->image_url($size_info['basic_key'])}}'>
                            <?=$post->image_tag($size_info['basic_key'], false, 'd-block mx-auto img-fluid '); ?>
                        </a>
                    </div>
                @endif

                <label for="blog_{{$size_key}}">Image - {{$size_info['name']}} (optionnel)</label>
                <small id="blog_{{$size_key}}_help" class="form-text text-muted">Poster une image {{$size_info['name']}} -
                    <code>{{$size_info['w']}}&times;{{$size_info['h']}}px</code> - elle sera
                    automatiquement redimentionnée si plus grande
                </small>
                <input class="form-control" type="file" name="{{$size_key}}" id="blog_{{$size_key}}"
                       aria-describedby="blog_{{$size_key}}_help">


            </div>
        @endforeach

        <p>
            Par défaut, les autres tailles seront adaptées à partir de la première image. Si vous voulez mettre des images spécifiques
            pour chaque taille, cliquez: <span onclick='$(this).parent().hide(); $(".image_upload_other_sizes").slideDown()'
                                           class='btn btn-light btn-sm'>Montrer les autres tailles</span>
        </p>

    </div>
@else
    <div class='alert alert-warning'>Le post d'images a été désactivé dans le fichier de configuration blogetc.php</div>
@endif


<div class='bg-white pt-4 px-4 pb-0 my-2 mb-4 rounded border'>
    <h4>Catégories:</h4>
    <div class='row'>

        @forelse(\WebDevEtc\BlogEtc\Models\BlogEtcCategory::orderBy("category_name","asc")->limit(1000)->get() as $category)
            <div class="form-check col-sm-6">
                <input class="" type="checkbox" value="1"
                       @if(old("category.".$category->id, $post->categories->contains($category->id))) checked='checked'
                       @endif name='category[{{$category->id}}]' id="category_check{{$category->id}}">
                <label class="form-check-label" for="category_check{{$category->id}}">
                    {{$category->category_name}}
                </label>
            </div>
        @empty
            <div class='col-md-12'>
                Aucune
            </div>
        @endforelse

        <div class='col-md-12 my-3 text-center'>

            <em><a target='_blank' href='{{route("blogetc.admin.categories.create_category")}}'><i class="fa fa-external-link" aria-hidden="true"></i>
                      Ajouter de nouvelles catégories
                    ici</a></em>
        </div>
    </div>
</div>
