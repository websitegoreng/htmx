<form class="flex flex-col gap-y-4 justify-center w-3/4 mx-auto" action="" method="" enctype="multipart/form-data">
                    {{-- @csrf
                    @method('POST') --}}
                    <div class="flex flex-col">
                        <label for="name">Nama</label>
                    <input name="name" type="text" placeholder="Produc't Name">
                    </div>
                    <div class="flex flex-col">
                        <label for="priceOld">Price Old</label>
                    <input name="priceOld" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="priceNew">Price New</label>
                        <input name="priceNew" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="stock">Produc't Stock</label>
                        <input name="stock" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="availableStock">Produc't Stock Available</label>
                        <select name="availableStock">
                            <option value="Ada">Ada</option>
                            <option value="Ada">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="rating">Produc't Rating</label>
                        <input name="rating" type="number">
                    </div>
                    <div class="flex flex-col">
                        <label for="description">Description</label>
                        <textarea class="h-32" name="description" placeholder="Deskripsi Produk"></textarea>
                    </div>
                    <div class="flex flex-col">
                        <label for="productId">Category</label>
                        <select name="productId">
                            <option value="Ada"></option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="rating">Brand</label>
                        <input name="rating" type="text" placeholder="Nama Brand">
                    </div>

                    {{-- <a class="flex my-6" href="{{route('product')}}">
                        <x-primary-button>save</x-primary-button>
                    </a> --}}
                </form>
