    <aside class="sidebar offcanvas-lg offcanvas-start">
      <div class="d-flex justify-content-end m-4 d-block d-lg-none">
        <button
          data-bs-dismiss="offcanvas"
          data-bs-target=".sidebar"
          class="btn p-0 border-0 fs-4"
          aria-label="Button Close"
        >
          <i class="fas fa-close"></i>
        </button>
      </div>
      <div class="logo-brand mt-lg-5">
        <img
          src="/assets/img/Logo-Itenas.jpg"
          alt="Logo Shoso"
          width="52"
          height="50"
        />
        <div>
          <h6 class="title-store">SIIDI</h6>
          <p class="tagline-store">Sistem Informasi</p>
          <p class="tagline-store">Indekos Dekat ITENAS</p>
        </div>
      </div>
      <hr />
      <nav class="menu flex-fill">
        <div class="section-menu">
          <a href="#" class="item-menu active" onclick="handleClickMenu(this)">
            <svg fill="currentColor">
              <path
                d="M6 2.5C3.79086 2.5 2 4.29086 2 6.5V10.5C2 11.6046 2.89543 12.5 4 12.5H5.5C6.32843 12.5 7 11.8284 7 11V10.5C7 9.94772 7.44772 9.5 8 9.5C8.55228 9.5 9 9.94772 9 10.5V10.8333C9 11.7538 9.74619 12.5 10.6667 12.5H12.3333C13.2538 12.5 14 11.7538 14 10.8333V10.5C14 9.94772 14.4477 9.5 15 9.5C15.5523 9.5 16 9.94772 16 10.5V11C16 11.8284 16.6716 12.5 17.5 12.5H19C20.1046 12.5 21 11.6046 21 10.5V6.5C21 4.29086 19.2091 2.5 17 2.5H6ZM3 14.75C3.41421 14.75 3.75 15.0858 3.75 15.5V18.5C3.75 20.2949 5.20507 21.75 7 21.75H16C17.7949 21.75 19.25 20.2949 19.25 18.5V15.5C19.25 15.0858 19.5858 14.75 20 14.75C20.4142 14.75 20.75 15.0858 20.75 15.5V18.5C20.75 21.1234 18.6234 23.25 16 23.25H7C4.37665 23.25 2.25 21.1234 2.25 18.5V15.5C2.25 15.0858 2.58579 14.75 3 14.75ZM9 16.75C9 16.3358 9.33579 16 9.75 16H13.25C13.6642 16 14 16.3358 14 16.75C14 17.1642 13.6642 17.5 13.25 17.5H9.75C9.33579 17.5 9 17.1642 9 16.75Z"
                fill="currentColor"
              />
            </svg>
            <p>Daftar Kosan</p>
          </a>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="currentColor">
              <mask id="path-1-inside-1_1_101" fill="white">
                <path
                  d="M5.9995 2.00305C5.99706 1.99898 5.99116 1.99898 5.98872 2.00305C5.00741 3.63857 3.6386 5.00738 2.00308 5.98869C1.99901 5.99113 1.99901 5.99702 2.00308 5.99946C3.6386 6.98077 5.00741 8.34959 5.98872 9.98511C5.99116 9.98917 5.99706 9.98917 5.9995 9.98511C6.98081 8.34959 8.34962 6.98077 9.98514 5.99946C9.98921 5.99702 9.98921 5.99113 9.98514 5.98869C8.34962 5.00738 6.98081 3.63857 5.9995 2.00305ZM16.6586 2.00677C16.6551 2.00102 16.6468 2.00102 16.6434 2.00677C15.2556 4.31973 13.3198 6.25553 11.0068 7.64331C11.0011 7.64676 11.0011 7.65509 11.0068 7.65854C13.3198 9.04632 15.2556 10.9821 16.6434 13.2951C16.6468 13.3008 16.6551 13.3008 16.6586 13.2951C18.0464 10.9821 19.9822 9.04632 22.2951 7.65854C22.3009 7.65509 22.3009 7.64676 22.2951 7.64331C19.9822 6.25553 18.0464 4.31973 16.6586 2.00677ZM7.65859 11.0068C7.65514 11.001 7.6468 11.001 7.64335 11.0068C6.25557 13.3197 4.31978 15.2555 2.00681 16.6433C2.00106 16.6468 2.00106 16.6551 2.00681 16.6585C4.31978 18.0463 6.25557 19.9821 7.64335 22.2951C7.6468 22.3008 7.65514 22.3008 7.65859 22.2951C9.04637 19.9821 10.9822 18.0463 13.2951 16.6585C13.3009 16.6551 13.3009 16.6468 13.2951 16.6433C10.9822 15.2555 9.04637 13.3197 7.65859 11.0068ZM17.9887 14.003C17.9912 13.999 17.9971 13.999 17.9995 14.003C18.9808 15.6386 20.3496 17.0074 21.9851 17.9887C21.9892 17.9911 21.9892 17.997 21.9851 17.9995C20.3496 18.9808 18.9808 20.3496 17.9995 21.9851C17.9971 21.9892 17.9912 21.9892 17.9887 21.9851C17.0074 20.3496 15.6386 18.9808 14.0031 17.9995C13.999 17.997 13.999 17.9911 14.0031 17.9887C15.6386 17.0074 17.0074 15.6386 17.9887 14.003Z"
                />
              </mask>
              <path
                d="M5.98872 2.00305L7.27496 2.77479L7.27498 2.77477L5.98872 2.00305ZM5.9995 2.00305L7.28574 1.23131L7.28572 1.23127L5.9995 2.00305ZM2.00308 5.98869L1.23134 4.70245L1.23129 4.70248L2.00308 5.98869ZM2.00308 5.99946L2.77482 4.71322L2.77479 4.7132L2.00308 5.99946ZM5.98872 9.98511L4.70248 10.7569L4.7025 10.7569L5.98872 9.98511ZM5.9995 9.98511L4.71326 9.21336L4.71324 9.21339L5.9995 9.98511ZM9.98514 5.99946L9.21348 4.71317L9.2134 4.71322L9.98514 5.99946ZM9.98514 5.98869L9.2134 7.27493L9.21342 7.27495L9.98514 5.98869ZM16.6434 2.00677L15.3571 1.23498L15.3571 1.23502L16.6434 2.00677ZM16.6586 2.00677L17.9448 1.23502L17.9448 1.23498L16.6586 2.00677ZM11.0068 7.64331L10.2351 6.35707L10.2351 6.35707L11.0068 7.64331ZM11.0068 7.65854L10.2351 8.94477L10.2351 8.94478L11.0068 7.65854ZM16.6434 13.2951L17.9296 12.5233L17.9296 12.5233L16.6434 13.2951ZM16.6586 13.2951L15.3723 12.5233L15.3723 12.5235L16.6586 13.2951ZM22.2951 7.65854L21.5235 6.37226L21.5234 6.3723L22.2951 7.65854ZM22.2951 7.64331L21.5234 8.92955L21.5235 8.9296L22.2951 7.64331ZM7.64335 11.0068L8.92959 11.7785L8.92964 11.7784L7.64335 11.0068ZM7.65859 11.0068L6.37235 11.7785L6.37235 11.7785L7.65859 11.0068ZM2.00681 16.6433L1.23507 15.3571L1.23505 15.3571L2.00681 16.6433ZM2.00681 16.6585L1.23503 17.9448L1.23507 17.9448L2.00681 16.6585ZM7.64335 22.2951L6.35711 23.0668L6.35711 23.0668L7.64335 22.2951ZM7.65859 22.2951L8.94476 23.0669L8.94483 23.0668L7.65859 22.2951ZM13.2951 16.6585L14.0669 17.9448L14.0669 17.9448L13.2951 16.6585ZM13.2951 16.6433L14.067 15.3571L14.0669 15.3571L13.2951 16.6433ZM17.9995 14.003L16.7132 14.7747L16.7133 14.7748L17.9995 14.003ZM17.9887 14.003L16.7026 13.2312L16.7025 13.2313L17.9887 14.003ZM21.9851 17.9887L21.2134 19.2749L21.2135 19.275L21.9851 17.9887ZM21.9851 17.9995L21.2135 16.7132L21.2134 16.7132L21.9851 17.9995ZM17.9995 21.9851L19.2857 22.757L19.2857 22.7569L17.9995 21.9851ZM17.9887 21.9851L19.275 21.2135L19.275 21.2134L17.9887 21.9851ZM14.0031 17.9995L13.2313 19.2857L13.2313 19.2857L14.0031 17.9995ZM14.0031 17.9887L13.2313 16.7025L13.2313 16.7025L14.0031 17.9887ZM7.27498 2.77477C6.69478 3.74181 5.29341 3.74166 4.71328 2.77482L7.28572 1.23127C6.70071 0.256309 5.28755 0.256154 4.70247 1.23133L7.27498 2.77477ZM2.77482 7.27493C4.62147 6.16695 6.16698 4.62143 7.27496 2.77479L4.70248 1.2313C3.84785 2.6557 2.65573 3.84782 1.23134 4.70245L2.77482 7.27493ZM2.77479 4.7132C3.74184 5.2934 3.74169 6.69476 2.77487 7.2749L1.23129 4.70248C0.256339 5.2875 0.256191 6.70065 1.23137 7.28572L2.77479 4.7132ZM7.27496 9.21336C6.16698 7.36672 4.62147 5.82121 2.77482 4.71322L1.23134 7.2857C2.65573 8.14034 3.84785 9.33246 4.70248 10.7569L7.27496 9.21336ZM4.71324 9.21339C5.29348 8.24628 6.69486 8.24656 7.27495 9.21334L4.7025 10.7569C5.28747 11.7318 6.70063 11.7321 7.28575 10.7568L4.71324 9.21339ZM9.2134 4.71322C7.36675 5.82121 5.82124 7.36672 4.71326 9.21336L7.28574 10.7569C8.14037 9.33246 9.33249 8.14034 10.7569 7.2857L9.2134 4.71322ZM9.21342 7.27495C8.24641 6.69476 8.24646 5.29329 9.21348 4.71317L10.7568 7.28576C11.7319 6.70076 11.732 5.2875 10.7569 4.70244L9.21342 7.27495ZM4.71326 2.77479C5.82124 4.62143 7.36675 6.16695 9.2134 7.27493L10.7569 4.70245C9.33249 3.84782 8.14037 2.6557 7.28574 1.23131L4.71326 2.77479ZM17.9296 2.77856C17.3504 3.74372 15.9516 3.74379 15.3724 2.77856L17.9448 1.23498C17.3587 0.258241 15.9432 0.258319 15.3571 1.23498L17.9296 2.77856ZM11.7786 8.92955C14.3026 7.41509 16.4151 5.3026 17.9296 2.77851L15.3571 1.23502C14.096 3.33687 12.3369 5.09596 10.2351 6.35707L11.7786 8.92955ZM11.7786 6.37231C12.7437 6.95138 12.744 8.3503 11.7786 8.92955L10.2351 6.35707C9.25816 6.94321 9.25846 8.3588 10.2351 8.94477L11.7786 6.37231ZM17.9296 12.5233C16.4151 9.99925 14.3026 7.88676 11.7786 6.3723L10.2351 8.94478C12.3369 10.2059 14.096 11.965 15.3571 14.0668L17.9296 12.5233ZM15.3723 12.5235C15.9515 11.5579 17.3505 11.5582 17.9296 12.5233L15.3571 14.0668C15.9431 15.0435 17.3588 15.0438 17.9449 14.0667L15.3723 12.5235ZM21.5234 6.3723C18.9993 7.88676 16.8868 9.99925 15.3723 12.5233L17.9448 14.0668C19.2059 11.965 20.965 10.2059 23.0669 8.94478L21.5234 6.3723ZM21.5235 8.9296C20.5581 8.35046 20.5581 6.95139 21.5235 6.37226L23.0668 8.94483C24.0437 8.35879 24.0437 6.94306 23.0668 6.35702L21.5235 8.9296ZM15.3723 2.77851C16.8868 5.3026 18.9993 7.41509 21.5234 8.92955L23.0669 6.35707C20.965 5.09596 19.2059 3.33687 17.9448 1.23502L15.3723 2.77851ZM8.92964 11.7784C8.35046 12.7439 6.95146 12.7437 6.37235 11.7785L8.94483 10.235C8.35881 9.25833 6.94314 9.25817 6.35707 10.2351L8.92964 11.7784ZM2.77855 17.9295C5.30265 16.4151 7.41514 14.3026 8.92959 11.7785L6.35711 10.235C5.09601 12.3369 3.33691 14.096 1.23507 15.3571L2.77855 17.9295ZM2.77859 15.3723C3.74377 15.9515 3.74383 17.3504 2.77858 17.9295L1.23505 15.3571C0.258288 15.9432 0.25835 17.3587 1.23503 17.9448L2.77859 15.3723ZM8.92959 21.5233C7.41514 18.9993 5.30265 16.8868 2.77855 15.3723L1.23507 17.9448C3.33691 19.2059 5.09601 20.965 6.35711 23.0668L8.92959 21.5233ZM6.37241 21.5232C6.95138 20.5585 8.35022 20.5577 8.92959 21.5233L6.35711 23.0668C6.94339 24.044 8.3589 24.0432 8.94476 23.0669L6.37241 21.5232ZM12.5234 15.3723C9.99929 16.8868 7.8868 18.9993 6.37235 21.5233L8.94483 23.0668C10.2059 20.965 11.965 19.2059 14.0669 17.9448L12.5234 15.3723ZM12.5233 17.9295C11.5584 17.3504 11.5579 15.9516 12.5234 15.3723L14.0669 17.9448C15.0438 17.3586 15.0434 15.9431 14.067 15.3571L12.5233 17.9295ZM6.37235 11.7785C7.8868 14.3026 9.99929 16.4151 12.5234 17.9295L14.0669 15.3571C11.965 14.096 10.2059 12.3369 8.94483 10.235L6.37235 11.7785ZM19.2858 13.2314C18.7007 12.256 17.2875 12.2565 16.7026 13.2312L19.2749 14.7749C18.6948 15.7415 17.2935 15.742 16.7132 14.7747L19.2858 13.2314ZM22.7569 16.7025C21.3325 15.8478 20.1404 14.6557 19.2857 13.2313L16.7133 14.7748C17.8212 16.6214 19.3668 18.1669 21.2134 19.2749L22.7569 16.7025ZM22.7568 19.2858C23.732 18.7007 23.732 17.2874 22.7568 16.7024L21.2135 19.275C20.2464 18.6948 20.2464 17.2933 21.2135 16.7132L22.7568 19.2858ZM19.2857 22.7569C20.1404 21.3325 21.3325 20.1403 22.7569 19.2857L21.2134 16.7132C19.3668 17.8212 17.8212 19.3667 16.7133 21.2134L19.2857 22.7569ZM16.7024 22.7568C17.2876 23.7321 18.7007 23.7317 19.2857 22.757L16.7133 21.2132C17.2934 20.2467 18.6948 20.2462 19.275 21.2135L16.7024 22.7568ZM13.2313 19.2857C14.6557 20.1403 15.8478 21.3325 16.7025 22.7569L19.275 21.2134C18.167 19.3667 16.6215 17.8212 14.7748 16.7132L13.2313 19.2857ZM13.2313 16.7025C12.2563 17.2875 12.2563 18.7006 13.2313 19.2857L14.7749 16.7133C15.7418 17.2934 15.7418 18.6947 14.7749 19.2749L13.2313 16.7025ZM16.7025 13.2313C15.8478 14.6557 14.6557 15.8478 13.2313 16.7025L14.7748 19.2749C16.6215 18.1669 18.167 16.6214 19.275 14.7748L16.7025 13.2313Z"
                fill="currentColor"
                mask="url(#path-1-inside-1_1_101)"
              />
            </svg>
            <p>KosanKu</p>
          </a>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                fill-rule="evenodd"
                d="M16.8241 11.5694L16.4129 11.973L20.3615 15.6397C21.8365 17.0093 21.8019 19.3545 20.2871 20.6799C18.9789 21.8246 17.0174 21.7956 15.7436 20.6128L11.5812 16.7478L11.4942 16.8389C9.74973 18.6653 6.84401 18.6987 5.05806 16.9127L3.69311 15.5478C1.93575 13.7904 1.93575 10.9412 3.69311 9.18382L9.09532 3.78161C10.8527 2.02425 13.7019 2.02425 15.4593 3.78161L16.8537 5.17607C18.6226 6.94496 18.6093 9.81698 16.8241 11.5694ZM12.6362 15.6804L15.3413 13.025L19.3409 16.7388C20.1638 17.503 20.1445 18.8115 19.2993 19.5511C18.5694 20.1897 17.475 20.1736 16.7643 19.5136L12.6362 15.6804ZM11.5358 14.6586L11 15.1846L10.4095 15.8028C9.2465 17.0205 7.30935 17.0427 6.11872 15.8521L4.75377 14.4871C3.58219 13.3156 3.58219 11.4161 4.75377 10.2445L10.156 4.84227C11.3276 3.6707 13.227 3.6707 14.3986 4.84227L15.7931 6.23673C16.9723 7.41599 16.9635 9.33067 15.7733 10.4989L11.5358 14.6586ZM2.75 20.6846C2.33579 20.6846 2 21.0203 2 21.4346C2 21.8488 2.33579 22.1846 2.75 22.1846H8.25C8.66421 22.1846 9 21.8488 9 21.4346C9 21.0203 8.66421 20.6846 8.25 20.6846H2.75Z"
                fill="currentColor"
              />
            </svg>
            <p>Tambah Kosan</p>
          </a>
        </div>
        <div class="section-menu">
          <p class="fs-18 fw-500 mb-2">My Account</p>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                d="M15.4559 6.58621V7.08621H15.9559H17.496C18.3534 7.08621 19.0124 7.67074 19.0966 8.36425L19.0966 8.36425L19.0973 8.36975L20.4776 18.7744C20.7115 20.7152 19.0442 22.5 16.7797 22.5H7.22014C4.95566 22.5 3.28838 20.7152 3.52228 18.7743L4.90258 8.36975L4.90261 8.36975L4.90328 8.36425C4.98747 7.67074 5.64646 7.08621 6.50387 7.08621H8.04397H8.54397V6.58621V5.62069C8.54397 3.93794 10.0487 2.5 11.9999 2.5C13.9512 2.5 15.4559 3.93794 15.4559 5.62069V6.58621ZM14.8735 8.03448V7.53448H14.3735H9.62636H9.12636V8.03448V10.4483C9.12636 10.5313 9.03859 10.6724 8.83516 10.6724C8.63174 10.6724 8.54397 10.5313 8.54397 10.4483V8.03448V7.53448H8.04397H6.50387C6.01844 7.53448 5.54941 7.87337 5.48368 8.40043L4.1033 18.8056L4.10327 18.8056L4.1026 18.8111C3.88702 20.5869 5.3988 22.0517 7.22014 22.0517H16.7797C18.6011 22.0517 20.1129 20.5869 19.8973 18.8111L19.8973 18.8111L19.8966 18.8056L18.5162 8.40048C18.4505 7.87339 17.9815 7.53448 17.496 7.53448H15.9559H15.4559V8.03448V10.4483C15.4559 10.5313 15.3681 10.6724 15.1647 10.6724C14.9613 10.6724 14.8735 10.5313 14.8735 10.4483V8.03448ZM14.3735 7.08621H14.8735V6.58621V5.62069C14.8735 4.104 13.5444 2.94828 11.9999 2.94828C10.4555 2.94828 9.12636 4.104 9.12636 5.62069V6.58621V7.08621H9.62636H14.3735ZM9.33516 16C9.33516 15.917 9.42294 15.7759 9.62636 15.7759H14.3735C14.5769 15.7759 14.6647 15.917 14.6647 16C14.6647 16.083 14.5769 16.2241 14.3735 16.2241H9.62636C9.42293 16.2241 9.33516 16.083 9.33516 16Z"
                stroke="currentColor"
              />
            </svg>
            <p class="flex-fill">Your Order</p>
            <div class="circle-notif rounded-circle">
              <p>1</p>
            </div>
          </a>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <path
                d="M5.69331 9.17202C4.80139 5.38137 7.67749 1.75 11.5717 1.75H12.4283C16.3225 1.75 19.1986 5.38137 18.3067 9.17202C18.2441 9.438 18.2734 9.71732 18.3897 9.96454L19.0683 9.6452L18.3897 9.96454L19.9699 13.3225C20.1544 13.7144 20.25 14.1422 20.25 14.5754C20.25 15.7607 19.5509 16.7382 18.5105 16.9941C16.9986 17.3659 14.7669 17.75 12 17.75C9.23306 17.75 7.00142 17.3659 5.48952 16.9941C4.44915 16.7382 3.75 15.7607 3.75 14.5754C3.75 14.1422 3.84563 13.7144 4.03005 13.3225L5.61029 9.96454C5.72663 9.71731 5.75589 9.43799 5.69331 9.17202Z"
                stroke="currentColor"
                stroke-width="1.5"
              />
              <path
                d="M14.5 21C14.4001 21.156 14.2369 21.3228 13.9972 21.4777C13.758 21.6324 13.4583 21.7647 13.1108 21.8578C12.7639 21.9507 12.3858 22 12 22C11.6142 22 11.2361 21.9507 10.8892 21.8578C10.5417 21.7647 10.242 21.6324 10.0028 21.4777C9.76312 21.3228 9.59994 21.156 9.5 21"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
            <p class="flex-fill">Notifications</p>
            <div class="circle-notif rounded-circle">
              <p>9</p>
            </div>
          </a>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <mask id="path-1-inside-1_1_75" fill="white">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.0606 6.62561L11.1213 7.68625L12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563C18.8347 7.84339 19.0644 9.67508 18.306 11.1244C17.8725 11.2566 17.4641 11.4942 17.1213 11.837C16.0052 10.721 14.1957 10.721 13.0796 11.837C11.9635 12.9531 11.9635 14.7626 13.0796 15.8787L13.0851 15.8842L13.4393 16.2383L11.1213 18.5563L4.63588 12.0709L4.6345 12.0695L4.62563 12.0606L4.62509 12.0601C3.12479 10.5592 3.12497 8.12628 4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561ZM14.4999 17.299L11.751 20.0479C11.4032 20.3957 10.8394 20.3957 10.4916 20.0479L3.57522 13.1315L3.56497 13.1213C1.47834 11.0347 1.47834 7.65159 3.56497 5.56497C5.65158 3.47835 9.03464 3.47835 11.1213 5.56494C13.2079 3.47834 16.591 3.47835 18.6776 5.56497C20.1781 7.06549 20.5996 9.23648 19.942 11.1136C20.389 11.2435 20.8105 11.4846 21.1629 11.837C22.279 12.9531 22.279 14.7626 21.163 15.8787L17.4581 19.5836C17.2721 19.7696 16.9705 19.7696 16.7845 19.5836L14.4999 17.299Z"
                />
              </mask>
              <path
                d="M11.1213 7.68625L10.0606 8.74692L11.1213 9.80756L12.1819 8.74692L11.1213 7.68625ZM10.0606 6.62561L8.99996 7.68628L8.99996 7.68628L10.0606 6.62561ZM12.1819 6.62561L11.1213 5.56494L12.1819 6.62561ZM17.6169 6.62563L18.6776 5.56497L18.6776 5.56497L17.6169 6.62563ZM18.306 11.1244L18.7435 12.5592L19.344 12.3761L19.6351 11.8198L18.306 11.1244ZM17.1213 11.837L16.0606 12.8977L17.1213 13.9583L18.1819 12.8977L17.1213 11.837ZM13.0796 11.837L14.1403 12.8977H14.1403L13.0796 11.837ZM13.0796 15.8787L12.019 16.9394L12.0203 16.9407L13.0796 15.8787ZM13.0851 15.8842L14.1458 14.8235L14.1444 14.8221L13.0851 15.8842ZM13.4393 16.2383L14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383ZM11.1213 18.5563L10.0607 19.617L11.1213 20.6776L12.182 19.617L11.1213 18.5563ZM4.63588 12.0709L5.69654 11.0102L5.69499 11.0086L4.63588 12.0709ZM4.6345 12.0695L3.57534 13.1316L3.57539 13.1317L4.6345 12.0695ZM4.62563 12.0606L3.56496 13.1213L3.56647 13.1228L4.62563 12.0606ZM4.62509 12.0601L3.56422 13.1205L3.56443 13.1208L4.62509 12.0601ZM4.62563 6.62563L3.56497 5.56497L3.56497 5.56497L4.62563 6.62563ZM14.4999 17.299L15.5606 16.2383L14.4999 15.1777L13.4393 16.2383L14.4999 17.299ZM11.751 20.0479L12.8117 21.1086L12.8117 21.1086L11.751 20.0479ZM10.4916 20.0479L9.43097 21.1086L9.43097 21.1086L10.4916 20.0479ZM3.57522 13.1315L4.63588 12.0709L4.63448 12.0695L3.57522 13.1315ZM3.56497 13.1213L2.5043 14.182L2.50571 14.1834L3.56497 13.1213ZM3.56497 5.56497L4.62563 6.62563L3.56497 5.56497ZM11.1213 5.56494L10.0606 6.62561L11.1213 7.68625L12.1819 6.62561L11.1213 5.56494ZM18.6776 5.56497L19.7382 4.50431L19.7382 4.50431L18.6776 5.56497ZM19.942 11.1136L18.5264 10.6177L18.0028 12.1123L19.5235 12.5541L19.942 11.1136ZM21.1629 11.837L22.2236 10.7764V10.7764L21.1629 11.837ZM21.163 15.8787L22.2236 16.9394L22.2236 16.9394L21.163 15.8787ZM17.4581 19.5836L16.3974 18.5229L17.4581 19.5836ZM16.7845 19.5836L17.8452 18.5229L17.8452 18.5229L16.7845 19.5836ZM12.1819 6.62558L11.1213 5.56494L8.99996 7.68628L10.0606 8.74692L12.1819 6.62558ZM11.1213 5.56494L10.0606 6.62558L12.1819 8.74692L13.2426 7.68628L11.1213 5.56494ZM18.6776 5.56497C16.591 3.47835 13.2079 3.47834 11.1213 5.56494L13.2426 7.68628C14.1576 6.77124 15.6412 6.77124 16.5562 7.68629L18.6776 5.56497ZM19.6351 11.8198C20.6888 9.80605 20.3722 7.25962 18.6776 5.56497L16.5562 7.68629C17.2971 8.42716 17.44 9.5441 16.977 10.429L19.6351 11.8198ZM17.8685 9.68964C17.2055 9.89182 16.5816 10.2554 16.0606 10.7763L18.1819 12.8977C18.3467 12.7329 18.5395 12.6214 18.7435 12.5592L17.8685 9.68964ZM18.1819 10.7763C16.4801 9.0745 13.7208 9.07451 12.019 10.7764L14.1403 12.8977C14.6706 12.3674 15.5303 12.3674 16.0606 12.8977L18.1819 10.7763ZM12.019 10.7764C10.3171 12.4782 10.3171 15.2375 12.019 16.9394L14.1403 14.818C13.61 14.2877 13.61 13.428 14.1403 12.8977L12.019 10.7764ZM12.0203 16.9407L12.0258 16.9462L14.1444 14.8221L14.1389 14.8167L12.0203 16.9407ZM12.0244 16.9448L12.3786 17.299L14.4999 15.1777L14.1458 14.8235L12.0244 16.9448ZM12.182 19.617L14.4999 17.299L12.3786 15.1777L10.0607 17.4956L12.182 19.617ZM3.57522 13.1315L10.0607 19.617L12.182 17.4956L5.69654 11.0102L3.57522 13.1315ZM3.57539 13.1317L3.57678 13.1331L5.69499 11.0086L5.6936 11.0073L3.57539 13.1317ZM3.56647 13.1228L3.57534 13.1316L5.69366 11.0073L5.68479 10.9985L3.56647 13.1228ZM3.56443 13.1208L3.56497 13.1213L5.68629 11L5.68575 10.9994L3.56443 13.1208ZM3.56497 5.56497C1.47859 7.65134 1.47834 11.0339 3.56422 13.1205L5.68595 10.9996C4.77124 10.0846 4.77135 8.60122 5.68629 7.68629L3.56497 5.56497ZM11.1213 5.56494C9.03464 3.47834 5.65158 3.47835 3.56497 5.56497L5.68629 7.68629C6.60133 6.77124 8.08491 6.77124 8.99996 7.68628L11.1213 5.56494ZM13.4393 16.2383L10.6904 18.9873L12.8117 21.1086L15.5606 18.3597L13.4393 16.2383ZM10.6904 18.9873C10.9284 18.7492 11.3143 18.7492 11.5523 18.9873L9.43097 21.1086C10.3645 22.0421 11.8781 22.0421 12.8117 21.1086L10.6904 18.9873ZM11.5523 18.9873L4.63588 12.0709L2.51456 14.1922L9.43097 21.1086L11.5523 18.9873ZM4.63448 12.0695L4.62422 12.0592L2.50571 14.1834L2.51596 14.1936L4.63448 12.0695ZM4.62563 12.0606C3.12479 10.5598 3.12479 8.12646 4.62563 6.62563L2.50431 4.50431C-0.168102 7.17671 -0.168102 11.5095 2.50431 14.182L4.62563 12.0606ZM4.62563 6.62563C6.12646 5.1248 8.55978 5.12479 10.0606 6.62561L12.1819 4.50428C9.50951 1.8319 5.1767 1.83191 2.50431 4.50431L4.62563 6.62563ZM12.1819 6.62561C13.6828 5.12479 16.1161 5.1248 17.6169 6.62563L19.7382 4.50431C17.0658 1.83191 12.733 1.8319 10.0606 4.50428L12.1819 6.62561ZM17.6169 6.62563C18.6946 7.70332 19.0006 9.26386 18.5264 10.6177L21.3577 11.6096C22.1985 9.2091 21.6616 6.42766 19.7382 4.50431L17.6169 6.62563ZM22.2236 10.7764C21.6881 10.2408 21.044 9.87177 20.3605 9.6732L19.5235 12.5541C19.7341 12.6153 19.933 12.7284 20.1023 12.8977L22.2236 10.7764ZM22.2236 16.9394C23.9255 15.2375 23.9254 12.4782 22.2236 10.7764L20.1023 12.8977C20.6326 13.428 20.6326 14.2878 20.1023 14.8181L22.2236 16.9394ZM18.5188 20.6442L22.2236 16.9394L20.1023 14.818L16.3974 18.5229L18.5188 20.6442ZM15.7238 20.6442C16.4956 21.416 17.747 21.416 18.5188 20.6442L16.3974 18.5229C16.7972 18.1231 17.4454 18.1231 17.8452 18.5229L15.7238 20.6442ZM13.4393 18.3597L15.7238 20.6442L17.8452 18.5229L15.5606 16.2383L13.4393 18.3597Z"
                fill="currentColor"
                mask="url(#path-1-inside-1_1_75)"
              />
            </svg>
            <p>Favorites Shoes</p>
          </a>
          <a href="#" class="item-menu" onclick="handleClickMenu(this)">
            <svg fill="none">
              <mask id="path-1-inside-1_1_64" fill="white">
                <path
                  d="M16 5.25833C16 4.28723 15.2128 3.5 14.2417 3.5H11.7584C10.7872 3.5 10 4.28723 10 5.25834C10 6.61191 8.53473 7.45789 7.3625 6.7811C6.5215 6.29555 5.44612 6.5837 4.96056 7.4247L3.7189 9.57533C3.23335 10.4163 3.52149 11.4917 4.36249 11.9772C5.53471 12.654 5.53471 14.346 4.36249 15.0228C3.5215 15.5083 3.23335 16.5837 3.7189 17.4247L4.96057 19.5753C5.44612 20.4163 6.5215 20.7045 7.3625 20.2189C8.53472 19.5421 10 20.3881 10 21.7417C10 22.7128 10.7872 23.5 11.7583 23.5H14.2417C15.2128 23.5 16 22.7128 16 21.7417C16 20.3881 17.4653 19.5421 18.6375 20.2189C19.4785 20.7045 20.5539 20.4163 21.0394 19.5753L22.2811 17.4247C22.7667 16.5837 22.4785 15.5083 21.6375 15.0228C20.4653 14.346 20.4653 12.654 21.6375 11.9772C22.4785 11.4917 22.7667 10.4163 22.2811 9.5753L21.0395 7.42468C20.5539 6.58368 19.4785 6.29554 18.6375 6.78109C17.4653 7.45787 16 6.6119 16 5.25833Z"
                />
              </mask>
              <path
                d="M22.2811 9.5753L20.9821 10.3253L22.2811 9.5753ZM11.7584 5H14.2417V2H11.7584V5ZM5.01793 10.3253L6.2596 8.1747L3.66153 6.6747L2.41986 8.82533L5.01793 10.3253ZM6.25961 18.8253L5.01794 16.6747L2.41986 18.1747L3.66153 20.3253L6.25961 18.8253ZM14.2417 22H11.7583V25H14.2417V22ZM20.9821 16.6747L19.7404 18.8253L22.3385 20.3253L23.5801 18.1747L20.9821 16.6747ZM19.7404 8.17468L20.9821 10.3253L23.5802 8.8253L22.3385 6.67468L19.7404 8.17468ZM17.8875 5.48205C17.7153 5.58149 17.5 5.45719 17.5 5.25833H14.5C14.5 7.76661 17.2153 9.33425 19.3875 8.08013L17.8875 5.48205ZM22.3385 6.67468C21.4387 5.11624 19.446 4.58229 17.8875 5.48205L19.3875 8.08013C19.5111 8.00879 19.6691 8.05113 19.7404 8.17468L22.3385 6.67468ZM22.3875 13.2763C23.946 12.3765 24.4799 10.3837 23.5802 8.8253L20.9821 10.3253C21.0534 10.4489 21.0111 10.6069 20.8875 10.6782L22.3875 13.2763ZM22.3875 13.7237C22.2153 13.6243 22.2153 13.3757 22.3875 13.2763L20.8875 10.6782C18.7153 11.9323 18.7153 15.0677 20.8875 16.3218L22.3875 13.7237ZM23.5801 18.1747C24.4799 16.6163 23.9459 14.6235 22.3875 13.7237L20.8875 16.3218C21.0111 16.3931 21.0534 16.5511 20.9821 16.6747L23.5801 18.1747ZM17.8875 21.518C19.4459 22.4177 21.4387 21.8838 22.3385 20.3253L19.7404 18.8253C19.6691 18.9489 19.5111 18.9912 19.3875 18.9199L17.8875 21.518ZM17.5 21.7417C17.5 21.5428 17.7153 21.4185 17.8875 21.518L19.3875 18.9199C17.2153 17.6657 14.5 19.2334 14.5 21.7417H17.5ZM14.2417 25C16.0412 25 17.5 23.5412 17.5 21.7417H14.5C14.5 21.8843 14.3843 22 14.2417 22V25ZM8.5 21.7417C8.5 23.5412 9.95881 25 11.7583 25V22C11.6157 22 11.5 21.8843 11.5 21.7417H8.5ZM8.1125 21.5179C8.28472 21.4185 8.5 21.5428 8.5 21.7417H11.5C11.5 19.2334 8.78472 17.6657 6.6125 18.9199L8.1125 21.5179ZM3.66153 20.3253C4.56129 21.8837 6.55406 22.4177 8.1125 21.5179L6.6125 18.9199C6.48894 18.9912 6.33094 18.9489 6.25961 18.8253L3.66153 20.3253ZM3.61249 13.7237C2.05406 14.6235 1.5201 16.6162 2.41986 18.1747L5.01794 16.6747C4.9466 16.5511 4.98893 16.3931 5.11249 16.3218L3.61249 13.7237ZM3.61249 13.2763C3.78471 13.3757 3.78471 13.6243 3.61249 13.7237L5.11249 16.3218C7.28471 15.0677 7.2847 11.9323 5.11249 10.6782L3.61249 13.2763ZM2.41986 8.82533C1.5201 10.3838 2.05406 12.3765 3.61249 13.2763L5.11249 10.6782C4.98893 10.6069 4.9466 10.4489 5.01793 10.3253L2.41986 8.82533ZM8.1125 5.48206C6.55406 4.5823 4.56129 5.11626 3.66153 6.6747L6.2596 8.1747C6.33094 8.05114 6.48894 8.0088 6.6125 8.08014L8.1125 5.48206ZM8.50001 5.25834C8.50001 5.4572 8.28473 5.5815 8.1125 5.48206L6.6125 8.08014C8.78473 9.33427 11.5 7.76661 11.5 5.25834H8.50001ZM14.2417 5C14.3844 5 14.5 5.11566 14.5 5.25833H17.5C17.5 3.4588 16.0412 2 14.2417 2V5ZM11.7584 2C9.95882 2 8.50001 3.45881 8.50001 5.25834H11.5C11.5 5.11566 11.6157 5 11.7584 5V2Z"
                fill="currentColor"
                mask="url(#path-1-inside-1_1_64)"
              />
              <circle
                cx="13"
                cy="13.5"
                r="2.25"
                stroke="currentColor"
                stroke-width="1.5"
              />
            </svg>
            <p>Account Settings</p>
          </a>
        </div>
      </nav>
      <footer>
        <div class="d-flex gap-3 align-items-center mb-4">
          <img src="./assets/icons/ic_mode.svg" alt="Mode Display" />
          <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
          <div>
            <input
              id="checkbox"
              type="checkbox"
              class="toggle-theme"
              aria-label="Toggle Theme"
            />
            <label for="checkbox" class="label-toggle">
              <img
                src="./assets/icons/ic_moon.svg"
                width="50%"
                class="ic-theme"
                id="ic-dark"
                alt="Icon Dark"
              />
              <img
                src="./assets/icons/ic_sun.svg"
                width="50%"
                class="ic-theme"
                id="ic-light"
                alt="Icon Light"
              />
            </label>
          </div>
        </div>
        <p>©2022 BKA ITENAS. All rights reserved.</p>
      </footer>
    </aside>