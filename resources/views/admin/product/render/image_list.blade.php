<?php $i = 0 ?>
@foreach($product_other_image_url as $oimg)
        <div class="col-md-2" id="form-file-<?php echo $i ?>">
            <div class="form-group" data-companent="{{ $i }}" id="product-update-image-delete">
                    <button class="btn btn-danger btn-xs" type="button" id="delete_image" onclick="productdeleteimage('{{route('admin.product.oimagedelete',['pid'=>$product->id,'iid'=>$oimg->id])}}','{{ route('admin.product.imagelist',['id'=> $product->id ]) }}'); return false">Sil</button>
                <div class="image">
                    <img id="blah-{{ $i }}" src="{{ asset('uploads/') }}/{{ $oimg->url }}" alt="..." class="img-thumbnail" style="width: 200px !important;height: 150px !important;">
                </div>
            </div>
        </div>
    <?php $i++ ?>
@endforeach
