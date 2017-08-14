<span class="ing ing-qty">{{ $ing['qty'] }}</span>

<span class="ing ing-uom">{{ $ing['uom'] }}</span>

<span class="ing ing-item">{{ $ing['item'] }}</span>

@if (array_key_exists('modifier', $ing))
  <span class="ing ing-mod">{{ $ing['modifier'] }}</span>
@endif
