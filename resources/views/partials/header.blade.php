<header class="main-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/dashboard?role={{ request()->query('role', 'member') }}" class="logo">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg" class="logo-icon">
                <path d="M8 9V7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7V9" stroke="#00B050" stroke-width="2.5" stroke-linecap="round"/>
                <rect x="3" y="9" width="18" height="12" rx="2" fill="#00B050"/>
                <path d="M8 12V14M16 12V14" stroke="#FFF" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
            </svg>
            <span class="logo-text">App <span class="highlight">Oscar</span></span>
        </a>



        <!-- Right CTA / Actions -->
        <div class="header-actions">
            <!-- Cart Icon -->
            <a href="/cart?role={{ request()->query('role', 'member') }}" class="cart-btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="cart-badge">0</span>
            </a>
            
            <!-- User Profile -->
            <div class="user-profile-wrapper" style="display: flex; align-items: center; gap: 12px; position: relative;">
                <div class="user-profile" style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 4px 12px; border-radius: 99px; background: #f1f5f9;">
                    <div class="user-avatar" style="width: 32px; height: 32px; border-radius: 50%; background: #00B050; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; text-transform: uppercase;">
                        {{ substr(request()->query('role', 'Member'), 0, 1) }}
                    </div>
                    <span class="user-profile-text" style="font-size: 14px; font-weight: 600; color: #1e293b; text-transform: capitalize;">
                        {{ request()->query('role', 'Member') }}
                    </span>
                </div>

                <!-- Profile Dropdown -->
                <div id="profileDropdown" style="display: none; position: absolute; top: 110%; right: 0; width: 250px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); padding: 16px; z-index: 50;">
                    <div style="font-weight: 700; color: #0f172a; font-size: 1rem; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="ddName">Memuat...</div>
                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 12px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="ddEmail">...</div>
                    <div style="height: 1px; background: #e2e8f0; margin-bottom: 12px;"></div>
                    <div style="font-size: 0.85rem; color: #334155; margin-bottom: 8px;"><strong>Mitra:</strong> <span id="ddMitra">-</span></div>
                    <div style="font-size: 0.85rem; color: #334155; margin-bottom: 16px;"><strong>WhatsApp:</strong> <span id="ddWA">-</span></div>
                    <button type="button" onclick="document.getElementById('profileDropdown').style.display='none'" style="display: block; width: 100%; text-align: center; background: #f1f5f9; color: #475569; border: 1px solid #cbd5e1; padding: 8px; border-radius: 6px; font-weight: 600; font-size: 0.9rem; cursor: pointer; transition: background 0.2s;">Kembali</button>
                </div>
                
                <!-- Seller Center Link -->
                @if(strtolower(request()->query('role', 'Member')) === 'owner')
                <a href="/seller?role={{ request()->query('role', 'Member') }}" title="Seller Center" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #e0f2fe; color: #0284c7; text-decoration: none; transition: background 0.2s; margin-right: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.999 2.999 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.999 2.999 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                </a>
                @endif
                
                
                <!-- Riwayat Prospek Link -->
                @if(strtolower(request()->query('role', 'Member')) !== 'owner')
                <a href="/member/prospek?role={{ request()->query('role', 'Member') }}" title="Riwayat Prospek" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #fef3c7; color: #d97706; text-decoration: none; transition: background 0.2s; margin-right: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </a>
                @endif
                <!-- Logout Button -->
                <a href="/" title="Keluar (Logout)" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #fee2e2; color: #ef4444; text-decoration: none; transition: background 0.2s;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="18" height="18">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        updateCartBadge();
        // Listen to storage events to update badge across tabs
        window.addEventListener('storage', updateCartBadge);

        // User Profile logic
        let currentUser = null;
        try { currentUser = JSON.parse(localStorage.getItem('currentUser')); } catch(e) {}
        
        const userAvatar = document.querySelector('.user-avatar');
        const userText = document.querySelector('.user-profile-text');
        
        if (currentUser && currentUser.name) {
            if(userAvatar) userAvatar.textContent = currentUser.name.charAt(0).toUpperCase();
            if(userText) userText.textContent = currentUser.name;
            
            const ddName = document.getElementById('ddName');
            const ddEmail = document.getElementById('ddEmail');
            const ddMitra = document.getElementById('ddMitra');
            const ddWA = document.getElementById('ddWA');
            
            if(ddName) ddName.textContent = currentUser.name;
            if(ddEmail) ddEmail.textContent = currentUser.email;
            if(ddMitra) ddMitra.textContent = currentUser.mitra || '-';
            if(ddWA) ddWA.textContent = currentUser.whatsapp || '-';
        }

        const userProfile = document.querySelector('.user-profile');
        const profileDropdown = document.getElementById('profileDropdown');
        if (userProfile && profileDropdown) {
            userProfile.addEventListener('click', (e) => {
                e.stopPropagation();
                profileDropdown.style.display = profileDropdown.style.display === 'none' ? 'block' : 'none';
            });
            document.addEventListener('click', () => {
                profileDropdown.style.display = 'none';
            });
            profileDropdown.addEventListener('click', (e) => {
                e.stopPropagation();
            });
        }
    });

    function updateCartBadge() {
        const badge = document.querySelector('.cart-badge');
        if (badge) {
            let cartItems = [];
            try {
                cartItems = JSON.parse(localStorage.getItem('cartItems'));
            } catch(e) {}
            
            // Fix legacy state mismatch: if array is empty/null, force count to 0
            if (!cartItems || cartItems.length === 0) {
                localStorage.setItem('cartCount', 0);
                badge.textContent = 0;
            } else {
                const count = cartItems.reduce((sum, item) => sum + parseInt(item.qty || 0), 0);
                localStorage.setItem('cartCount', count);
                badge.textContent = count;
            }
        }
    }
</script>
