@extends('layouts.app')

@section('title','Inicio')

@section('content')
  <div class="content">
    <h1 class="jumbotron text-center">Escuela Profesional de Ingeniería Agrícola</h1>
  </div>
  <!-- <iframe width="1000" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://arcgis.com/apps/View/index.html?appid=6b6a075eca8d4899958fb273710a6806"></iframe> -->


<!-- <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Ayacucho Huamanga" src="//www.arcgis.com/apps/Embed/index.html?webmap=80e3bdc4a4754becbb93bc3e35780943&extent=-74.2617,-13.1984,-74.1563,-13.1427&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe> -->
<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Ayacucho Huamanga" src="//www.arcgis.com/apps/Embed/index.html?webmap=80e3bdc4a4754becbb93bc3e35780943&extent=-74.2617,-13.1984,-74.1563,-13.1427&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe></div>
{{-- <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Ayacucho Huamanga-Copia" src="//www.arcgis.com/apps/Embed/index.html?webmap=54bbac65222a4ffd85d499b861194357&extent=-74.2219,-13.1667,-74.2153,-13.1632&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe></div> --}}
@endsection