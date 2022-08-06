<div>
    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah Barang</button>


    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        No.
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Harga Beli
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Harga Jual
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Kadaluwarsa
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Stok Akhir
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            @foreach ($barangs as $index => $barang)

                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ $index+1 }}
                        </td>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $barang->id_barang }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $barang->nama_barang }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $barang->harga_barang_beli }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $barang->harga_barang_jual }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $barang->tgl_kadaluwarsa_barang }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $barang->akhir_stok ?? 0}}
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>

            @endforeach
        </table>
        <div class="m-2">

            {{ $barangs->links() }}
        </div>
    </div>
</div>
