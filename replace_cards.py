import sys

with open('c:/OSCARAPP/resources/views/home.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

start_str = '<div class="expandable-grid product-grid">'
end_str = '</div>\n        <!-- Pagination UI -->'

start_idx = content.find(start_str)
end_idx = content.find(end_str, start_idx)

if start_idx != -1 and end_idx != -1:
    replacement = '''<div class="expandable-grid product-grid">
            @foreach(collect($products)->take(6) as $product)
            <div class="card-item" onclick="window.location.href=\'/product/detail\'" style="border: 1px solid #e2e8f0; border-radius: 8px; background: white; transition: box-shadow 0.2s; position: relative; display: flex; flex-direction: column; overflow: hidden; font-family: \'Inter\', sans-serif; cursor: pointer;" onmouseover="this.style.boxShadow=\'0 4px 12px rgba(0,0,0,0.1)\'" onmouseout="this.style.boxShadow=\'none\'">
                
                <!-- Image Area -->
                <div style="position: relative; aspect-ratio: 1/1; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 10px;">
                    @if(\Carbon\Carbon::createFromFormat(\'d/m/Y\', $product[\'date\'])->diffInDays(now()) < 30)
                    <!-- New Tag -->
                    <div style="position: absolute; top: 0; right: 0; background-color: #0ea5e9; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-left-radius: 8px; z-index: 2;">BARU</div>
                    @endif
                    @if(!empty($product[\'discount\']))
                    <!-- Discount Tag -->
                    <div style="position: absolute; top: 0; left: 0; background-color: #ef4444; color: white; font-weight: 700; font-size: 0.7rem; padding: 4px 8px; border-bottom-right-radius: 8px; z-index: 2;">{{ $product[\'discount\'] }}</div>
                    @endif

                    <img src="{{ asset($product[\'image\']) }}" alt="Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
                
                <!-- Content Area -->
                <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                    <h3 style="font-size: 0.8rem; font-weight: 500; color: #334155; margin: 0 0 8px 0; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 35px;">
                        {{ $product[\'name\'] }}
                    </h3>
                    
                    <!-- Price -->
                    <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 4px;">
                        <span style="font-weight: 700; color: #ef4444; font-size: 0.9rem;">{{ $product[\'price\'] }}</span>
                    </div>
                    @if(!empty($product[\'price_max\']))
                    <div style="color: #94a3b8; font-size: 0.75rem; text-decoration: line-through; margin-bottom: 6px;">{{ $product[\'price_max\'] }}</div>
                    @endif
                    
                    <!-- Bonus Tag -->
                    <div style="color: #f59e0b; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px;">
                        Hemat s.d 5% Pakai Bonus
                    </div>
                    
                    <!-- Rating & Sold -->
                    <div style="display: flex; align-items: center; gap: 4px; color: #64748b; font-size: 0.7rem; margin-top: auto;">
                        <span style="color: #fbbf24;">⭐</span> {{ $product[\'rating\'] ?? \'4.9\' }} &middot; {{ $product[\'sales\'] ?? \'0\' }}+ terjual
                    </div>
                </div>
            </div>
            @endforeach
'''
    new_content = content[:start_idx] + replacement + content[end_idx:]
    with open('c:/OSCARAPP/resources/views/home.blade.php', 'w', encoding='utf-8') as f:
        f.write(new_content)
    print('Replaced successfully')
else:
    print('Failed to find markers')
    print('Start:', start_idx)
    print('End:', end_idx)
