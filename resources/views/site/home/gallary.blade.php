@extends('site.layouts.default') 

@section('content')


@section('galeries')
<div class="row">
    @if(count($photoalbums)>0) @foreach($photoalbums as $item)
    <div class="col-sm-3">
        <div class="row">
            <a href="{{URL::to('photo/'.$item->id.'/item')}}"
               class="hover-effect"> @if($item->album_image!="") <img
                    class="col-sm-12"
                    src="{!!'appfiles/photoalbum/'.$item->folderid.'/thumbs/'.$item->album_image !!}">
                @elseif($item->album_image_first!="") <img class="col-sm-12"
                                                           src="{!!'appfiles/photoalbum/'.$item->folderid.'/thumbs/'.$item->album_image_first !!}">
                @else <img class="col-sm-12" src="{!!'appfiles/photoalbum/default-image.jpg' !!}">
                @endif
            </a>
            <div class=" col-sm-12">{!!$item->name!!}</div>
        </div>
    </div>
    @endforeach @endif @if(count($videoalbums)>0) @foreach($videoalbums as
    $item)
    <div class="col-sm-3">
        <div class="row">
            <a href="{{URL::to('video/'.$item->id.'/item')}}">
                @if($item->album_image!="") <img class="col-sm-12"
                                                 src="{{{'http://img.youtube.com/vi/'.$item->album_image.'/hqdefault.jpg' }}}">
                @elseif($item->album_image_first!="") <img class="col-sm-12"
                                                           src="{{{'http://img.youtube.com/vi/'.$item->album_image_first.'/hqdefault.jpg' }}}">
                @else <img class="col-sm-12" src="{{'appfiles/photoalbum/default-image.jpg' }}">
                @endif
            </a>
            <div class=" col-sm-12">{!!$item->name!!}</div>
        </div>
    </div>
    @endforeach @endif
</div>
@stop