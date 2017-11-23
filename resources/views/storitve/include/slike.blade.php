@if(count($category->photo) >0)
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Slike</strong>
                </h2>
                <hr>
            </div>
            <div>
                <ul class="first">



                    @foreach($category->photo as $photo)

                        <a rel="example_group" href="{{$photo->file}}"><img class="img img-thumbnail" src="../photos/thumbs/{{$photo->thumb}}" alt="test"/></a>


                    @endforeach
                </ul>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    @endif
