<form action="{{url('produk', $produk->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Akan Menghapus Data ini?')">
@csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>