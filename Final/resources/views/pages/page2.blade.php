@extends('Main')
@section('body')
    <section class="h-[2606px]">
        <div class="flex h-[220px]"></div>
        <div style="font-family: montserrat;">
            <b class="text-[20px] text-[#020B75]">Startupnews дээрээс Стартап хайх</b>
        </div>
        <form class="bg-[white] h-[200px] my-4" style="font-family: montserrat;">
            <div class="flex">
                <div class="bg-[#9EA3C0] w-[771px] h-[50px] flex items-center mt-8 mb-4 mx-4">
                    <img src={{ asset('zuragnuud/search.png') }} alt="" class="w-[30px] h-[30[px] mx-4">
                    <input type="text" class="bg-[#9EA3C0] border-0 w-[700px] h-[28px] text-[white] font-bold text-[20px]"
                        id="search" name="search" value='Search for Startups on startupnews'>
                </div>
                <button type="submit" class="w-[100px] h-[50px] bg-[#2CFBFE] my-8"><b
                        class="text-[#020B75]">Хайх</b></button>
            </div>
            <div class="mx-4">
                <span class="text-[#020B75]">Хайлтын шүүлтүүр</span>
                <select class="w-[131px] h-[40px] border">
                    <option>Verticals</option>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                </select>
            </div>
        </form>
        <div style="font-family: montserrat;" class="my-4">
            <b class="text-[20px] text-[#020B75]">{{ count($tab) }} компани олдсон</b>
        </div>
        <div>
            <table class="w-[1072px] h-[80px] text-center bg-[white] text-[#020B75] overflow-hidden">
                <tr class="border border-collapse font-bold">
                    <td class="font-bold">Стартап</td>
                    <td class="font-bold">Чиглэл</td>
                    <td class="font-bold w-[150px]">Байгуулагдсан Он</td>
                    <td class="font-bold w-[150px]">Байгууллагын Мэйл</td>
                    <td class="font-bold">Холбогдох утас</td>
                </tr>
                @foreach ($tab as $val)
                    <tr class="border border-collapse">
                        <td>
                            <div class="flex items-center">
                                <img src={{ asset('images/octagon.png') }} alt="" class="w-[53px] h-[53px]">
                                <div class="text-[20px] px-2">
                                    <b> {{ $val->{'стартап'} }}</b>
                                </div>
                            </div>
                            <div class="grid" style="grid-template-columns: 0.12fr 1fr;">
                                <div></div>
                                <div class="text-[14px] text-start">
                                    @if ($val->{'Тухай'})
                                        <span class="text-[14px]">{{ $val->{'Тухай'} }}</span>
                                    @else
                                        <span class="text-[14px]">{{ '-' }}</span>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            @if ($val->{'Чиглэл'})
                                <span class="text-[14px]">{{ $val->{'Чиглэл'} }}</span>
                            @else
                                <span class="text-[14px]">{{ 'All/Any' }}</span>
                            @endif
                        </td>
                        <td class="w-[150px]">
                            @if ($val->{'БайгуулагдсанОн'})
                                <span class="text-[14px]">{{ $val->{'БайгуулагдсанОн'} }}</span>
                            @else
                                <span class="text-[14px]">{{ '-' }}</span>
                            @endif
                        </td>
                        <td class="w-[150px]">
                            @if ($val->{'БайгууллагынМэйл'})
                                <span class="text-[14px]">{{ $val->{'БайгууллагынМэйл'} }}</span>
                            @else
                                <span class="text-[14px]">{{ '-' }}</span>
                            @endif
                        </td>
                        <td>
                            @if ($val->{'ХолбогдохУтас'})
                                <span class="text-[14px]">{{ $val->{'ХолбогдохУтас'} }}</span>
                            @else
                                <span class="text-[14px]">{{ '-' }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="flex mt-4 mb-8 px-10">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">{{ $tab->links() }}</li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
