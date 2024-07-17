<x-app-layout>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{--  --}}
                    <table name="gridcont" class="border">
                        @for ($rowi = 0; $rowi < 20; $rowi++)
                            <tr class="">
                                @for ($coli = 0; $coli < 20; $coli++)
                                    <td class="
                                        border 
                                        border-black 
                                        w-[50px]
                                        h-[50px] 
                                        text-center 
                                        bg-{{ $mapCoordinates[$rowi][$coli] ?? '' }}-600
                                    ">
                                        {{$rowi}}-{{$coli}}
                                    </td>
                                @endfor
                            <td>
                        @endfor
                    </table>
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
