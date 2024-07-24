<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
$this->setFrameMode(true);
?><!-- product-->


<!-- product-->
<div class="product">
    <div class="container">
        <div class="product__grid product__grid--v2">
            <div class="product__header">
                <h1 class="product__title"><?= $arResult['NAME'] . ' ' . $arResult['PROPERTIES']['SIZE']['VALUE'] . ' <span>' . $arResult['PROPERTIES']['ARTICLE']['VALUE'] . '</span>'; ?></h1>
            </div>
            <div class="product__left">
                <!-- product-info-->
                <div class="product-info-v2">
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.25 0H8.75C6.42936 0 4.20376 0.921872 2.56282 2.56282C0.921872 4.20376 0 6.42936 0 8.75V26.25C0 28.5706 0.921872 30.7962 2.56282 32.4372C4.20376 34.0781 6.42936 35 8.75 35H26.25C28.5706 35 30.7962 34.0781 32.4372 32.4372C34.0781 30.7962 35 28.5706 35 26.25V8.75C35 6.42936 34.0781 4.20376 32.4372 2.56282C30.7962 0.921872 28.5706 0 26.25 0ZM33.3594 26.25C33.3572 28.1349 32.6075 29.9419 31.2747 31.2747C29.9419 32.6075 28.1349 33.3572 26.25 33.3594H8.75C6.86514 33.3572 5.05811 32.6075 3.72531 31.2747C2.39251 29.9419 1.6428 28.1349 1.64062 26.25V8.75C1.6428 6.86514 2.39251 5.05811 3.72531 3.72531C5.05811 2.39251 6.86514 1.6428 8.75 1.64062H26.25C28.1349 1.6428 29.9419 2.39251 31.2747 3.72531C32.6075 5.05811 33.3572 6.86514 33.3594 8.75V26.25Z" fill="#D9D9D9" />
                                <path d="M24.8828 23.7223L11.2777 10.1172H16.6595V8.47656H8.47656V16.6595H10.1172V11.2771L23.7229 24.8828H18.3405V26.5234H26.5234V18.3405H24.8828V23.7223Z" fill="#D9D9D9" />
                            </svg>
                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Площадь:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['PLOSHAD']['VALUE']; ?> м&sup2;</span>
                        </div>
                    </div>
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="38" height="35" viewBox="0 0 38 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.2578 0H25.9765C25.5666 0 25.2343 0.347592 25.2343 0.776394V3.8822C25.2343 4.31101 25.5666 4.6586 25.9765 4.6586H27.461V10.4656H13.3594C12.9495 10.4656 12.6172 10.8132 12.6172 11.242V14.3477C12.6172 14.7765 12.9495 15.1241 13.3594 15.1241H14.8438V20.9312H0.74219C0.332279 20.9312 0 21.2788 0 21.7076V24.8132C0 25.242 0.332279 25.5896 0.74219 25.5896H1.78096V34.2236C1.78096 34.6524 2.11324 35 2.52315 35H16.0132C16.1806 35 16.3431 34.9408 16.4743 34.8319L37.719 17.2099C37.8965 17.0627 38 16.8387 38 16.6016V0.776394C38 0.347592 37.6678 0 37.2578 0ZM14.1015 13.5713V12.0183H27.461V13.5713H14.1015ZM1.48438 24.0369V22.484H14.8438V24.0369H1.48438ZM36.5156 6.15533H33.47C33.0601 6.15533 32.7279 6.50292 32.7279 6.93172C32.7279 7.36053 33.0601 7.70812 33.47 7.70812H36.5156V16.2263L15.7545 33.4472H3.26534V28.6139H6.31099C6.72083 28.6139 7.05318 28.2663 7.05318 27.8375C7.05318 27.4087 6.72083 27.0611 6.31099 27.0611H3.26534V25.5896H15.586C15.9959 25.5896 16.3282 25.242 16.3282 24.8132V15.1241H28.2032C28.6131 15.1241 28.9454 14.7765 28.9454 14.3477V4.6586H36.5156V6.15533ZM36.5156 3.10581H26.7187V1.55279H36.5156V3.10581Z" fill="#D9D9D9" />
                                <path d="M8.46097 27.0609H8.44345C8.03347 27.0609 7.70126 27.4085 7.70126 27.8373C7.70126 28.2661 8.03347 28.6137 8.44345 28.6137H8.46097C8.87081 28.6137 9.20316 28.2661 9.20316 27.8373C9.20316 27.4085 8.87081 27.0609 8.46097 27.0609Z" fill="#D9D9D9" />
                                <path d="M31.3203 7.7082H31.3377C31.7476 7.7082 32.0799 7.3606 32.0799 6.9318C32.0799 6.503 31.7476 6.15541 31.3377 6.15541H31.3203C30.9104 6.15541 30.5781 6.503 30.5781 6.9318C30.5781 7.3606 30.9104 7.7082 31.3203 7.7082Z" fill="#D9D9D9" />
                            </svg>

                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Этажность:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['ETAZHNOST']['VALUE']; ?> м&sup2;</span>
                        </div>
                    </div>
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.81741 1.1805C4.06186 0.85444 3.99568 0.391947 3.66961 0.147529C3.34355 -0.096925 2.8811 -0.0307388 2.63664 0.295323L0.147462 3.61571C-0.0491417 3.87799 -0.0491417 4.23858 0.147462 4.50089L2.63664 7.82128C2.8811 8.14734 3.34355 8.21349 3.66961 7.96907C3.99568 7.72462 4.06186 7.26216 3.81741 6.9361L2.21318 4.79615H25.032L23.3412 6.91898C23.0873 7.2377 23.1399 7.70193 23.4586 7.95583C23.7773 8.20973 24.2416 8.15716 24.4955 7.8384L27.1402 4.51801C27.3545 4.24898 27.3545 3.86758 27.1402 3.59859L24.4955 0.278205C24.2416 -0.0405524 23.7773 -0.0931619 23.4586 0.160737C23.1399 0.414636 23.0873 0.878864 23.3412 1.19762L25.032 3.32042H2.21318L3.81741 1.1805Z" fill="#D9D9D9" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.6214C0 10.8064 0.660719 10.1457 1.47573 10.1457H26.0097C26.8247 10.1457 27.4854 10.8064 27.4854 11.6214V36.5243C27.4854 37.3392 26.8247 38 26.0097 38H1.47573C0.660719 38 0 37.3392 0 36.5243V11.6214ZM26.0097 11.6214H1.47573V36.5243H26.0097V11.6214Z" fill="#D9D9D9" />
                                <path d="M30.0309 34.3302C30.2754 34.0045 30.7379 33.9381 31.0639 34.1827L33.2038 35.7868V12.968L31.081 14.6588C30.7623 14.9127 30.2981 14.8602 30.0442 14.5414C29.7903 14.2227 29.8428 13.7584 30.1616 13.5045L33.482 10.8598C33.751 10.6455 34.1324 10.6455 34.4014 10.8598L37.7218 13.5045C38.0405 13.7584 38.0933 14.2227 37.8391 14.5414C37.5853 14.8602 37.1211 14.9127 36.8024 14.6588L34.6796 12.968V35.7868L36.8194 34.1827C37.1455 33.9381 37.6081 34.0045 37.8524 34.3302C38.097 34.6564 38.0306 35.119 37.7048 35.3632L34.3844 37.8524C34.1221 38.0491 33.7613 38.0491 33.499 37.8524L30.1787 35.3632C29.8526 35.119 29.7865 34.6564 30.0309 34.3302Z" fill="#D9D9D9" />
                            </svg>
                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Размер:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['SIZE']['VALUE']; ?> м&sup2;</span>
                        </div>
                    </div>
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.25 0H8.75C6.42936 0 4.20376 0.921872 2.56282 2.56282C0.921872 4.20376 0 6.42936 0 8.75V26.25C0 28.5706 0.921872 30.7962 2.56282 32.4372C4.20376 34.0781 6.42936 35 8.75 35H26.25C28.5706 35 30.7962 34.0781 32.4372 32.4372C34.0781 30.7962 35 28.5706 35 26.25V8.75C35 6.42936 34.0781 4.20376 32.4372 2.56282C30.7962 0.921872 28.5706 0 26.25 0ZM33.3594 26.25C33.3572 28.1349 32.6075 29.9419 31.2747 31.2747C29.9419 32.6075 28.1349 33.3572 26.25 33.3594H8.75C6.86514 33.3572 5.05811 32.6075 3.72531 31.2747C2.39251 29.9419 1.6428 28.1349 1.64062 26.25V8.75C1.6428 6.86514 2.39251 5.05811 3.72531 3.72531C5.05811 2.39251 6.86514 1.6428 8.75 1.64062H26.25C28.1349 1.6428 29.9419 2.39251 31.2747 3.72531C32.6075 5.05811 33.3572 6.86514 33.3594 8.75V26.25Z" fill="#D9D9D9" />
                                <rect x="8.75" y="7.75" width="17.5" height="18.5" rx="1.25" stroke="#D9D9D9" stroke-width="1.5" />
                                <rect x="17.75" y="7.75" width="8.5" height="9.5" rx="1.25" stroke="#D9D9D9" stroke-width="1.5" />
                            </svg>
                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Комнат:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['KOMNAT']['VALUE']; ?></span>
                        </div>
                    </div>
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.25 23.9167V22.1667H33.8333C34.4776 22.1667 35 21.6443 35 21V20.4167C35 19.128 33.9553 18.0833 32.6666 18.0833H28.8808C28.1286 16.6499 26.6438 15.7514 25.025 15.75H18.6083C17.3718 15.6881 16.1665 16.1505 15.2886 17.0234C15.1941 16.9523 15.1002 16.8799 15.0127 16.8035C13.2605 15.3335 11.0368 14.5452 8.74999 14.5833H6.41666V4.08335C6.41666 3.76119 6.67783 3.50002 7 3.50002H10.115C10.2716 3.49967 10.4217 3.56281 10.5309 3.67502L11.3598 4.50394C10.8045 5.21765 10.502 6.09568 10.5 7.00002C10.5 7.64435 11.0223 8.16668 11.6667 8.16668H17.5C18.0963 8.15985 18.5953 7.71226 18.6667 7.12018C18.6979 5.03591 17.1785 3.25171 15.1159 2.95052C14.9858 2.93419 14.8557 2.92602 14.7257 2.92194L13.0083 1.19761C12.2427 0.427692 11.2007 -0.00360261 10.115 2.26709e-05H7C4.7459 0.00259438 2.91924 1.82926 2.91666 4.08335V14.5833H2.33333C1.04467 14.5833 0 15.628 0 16.9167V17.5C0 18.1443 0.522334 18.6667 1.16667 18.6667H1.75V23.9167C1.7526 26.501 3.07188 28.9058 5.25 30.2966V31.5H4.66666C3.70017 31.5 2.91666 32.2835 2.91666 33.25V33.8333H0.583333C0.261167 33.8333 0 34.0945 0 34.4167C0 34.7388 0.261167 35 0.583333 35H34.4166C34.7388 35 35 34.7388 35 34.4167C35 34.0945 34.7388 33.8333 34.4166 33.8333H32.0833V33.25C32.0833 32.2835 31.2998 31.5 30.3333 31.5H29.75V30.2966C31.9281 28.9058 33.2474 26.501 33.25 23.9167ZM33.8333 20.4167V21H29.4V20.125C29.3999 19.8311 29.37 19.5379 29.3107 19.25H32.6666C33.311 19.25 33.8333 19.7723 33.8333 20.4167ZM27.9866 18.8901C28.1496 19.2814 28.2335 19.7011 28.2333 20.125V26.8333C28.2333 27.1555 27.9721 27.4167 27.65 27.4167H23.3333C23.0112 27.4167 22.75 27.1555 22.75 26.8333V20.125C22.7507 18.9064 22.2416 17.743 21.3459 16.9167H25.025C26.32 16.9165 27.4881 17.6949 27.9866 18.8901ZM20.4167 20.125C20.4186 19.856 20.3656 19.5894 20.2609 19.3416C19.9472 18.5814 19.2067 18.0849 18.3843 18.0833C17.682 18.0749 16.9888 17.9236 16.3467 17.6388C17.3067 16.8556 18.6318 16.6951 19.751 17.2264C20.8702 17.7578 21.5834 18.8861 21.5833 20.125V26.8333C21.5853 27.0325 21.6216 27.2299 21.6907 27.4167H21C20.6778 27.4167 20.4167 27.1555 20.4167 26.8333V20.125ZM17.5 7.00002H11.6667C11.6667 5.38919 12.9725 4.08335 14.5833 4.08335C16.1942 4.08335 17.5 5.38919 17.5 7.00002ZM4.08333 4.08335C4.08526 2.47332 5.38997 1.16862 7 1.16669H10.115C10.8903 1.16437 11.6343 1.4723 12.1812 2.02185L13.2895 3.1331C12.8995 3.26267 12.5313 3.45049 12.1975 3.69019L11.3557 2.84844C11.0276 2.5178 10.5808 2.3323 10.115 2.33335H7C6.0335 2.33335 5.25 3.11686 5.25 4.08335V14.5833H4.08333V4.08335ZM1.16667 16.9167C1.16667 16.2723 1.689 15.75 2.33333 15.75H8.74999C10.7549 15.7119 12.7063 16.3981 14.2462 17.6826C15.3338 18.6235 16.7052 19.173 18.1417 19.2436C18.4284 19.2181 18.7148 19.2957 18.9496 19.4623C19.1406 19.6295 19.2502 19.8711 19.25 20.125V21H18.6667C16.6613 21.0362 14.7099 20.3498 13.1687 19.0663C12.0057 18.0568 10.5175 17.5007 8.97749 17.5H1.16667V16.9167ZM2.91666 23.9167V18.6667H8.97749C10.2361 18.6673 11.4524 19.1214 12.4034 19.9459C14.1561 21.4154 16.3798 22.2038 18.6667 22.1667H19.25V26.8333C19.25 27.7998 20.0335 28.5833 21 28.5833H27.65C28.6165 28.5833 29.4 27.7998 29.4 26.8333V22.1667H32.0833V23.9167C32.0791 27.4588 29.2087 30.3292 25.6666 30.3333H9.33333C5.79123 30.3292 2.92084 27.4588 2.91666 23.9167ZM10.6062 31.5H24.3938C25.1136 32.0711 25.562 32.917 25.6305 33.8333H9.36891C9.4379 32.9171 9.88641 32.0712 10.6062 31.5ZM4.08333 33.8333V33.25C4.08333 32.9278 4.3445 32.6667 4.66666 32.6667H5.83333C6.1555 32.6667 6.41666 32.4055 6.41666 32.0833V30.9167C7.24536 31.2603 8.1288 31.4531 9.02533 31.486C8.54259 32.1795 8.25601 32.9905 8.19583 33.8333H4.08333ZM29.1666 32.6667H30.3333C30.6555 32.6667 30.9166 32.9278 30.9166 33.25V33.8333H26.8071C26.7455 32.9898 26.458 32.1784 25.9746 31.4842C26.8711 31.452 27.7545 31.2597 28.5833 30.9167V32.0833C28.5833 32.4055 28.8445 32.6667 29.1666 32.6667Z" fill="#D9D9D9" />
                                <path d="M9.91666 28.5833C9.91666 28.2611 9.65549 28 9.33333 28C7.07923 27.9974 5.25257 26.1707 5.25 23.9166C5.25 23.5945 4.98883 23.3333 4.66666 23.3333C4.3445 23.3333 4.08333 23.5945 4.08333 23.9166C4.08654 26.8148 6.43517 29.1634 9.33333 29.1666C9.65549 29.1666 9.91666 28.9055 9.91666 28.5833Z" fill="#D9D9D9" />
                                <path d="M14 9.91666V12.8333C14 13.1555 14.2612 13.4167 14.5833 13.4167C14.9055 13.4167 15.1667 13.1555 15.1667 12.8333V9.91666C15.1667 9.59449 14.9055 9.33333 14.5833 9.33333C14.2612 9.33333 14 9.59449 14 9.91666Z" fill="#D9D9D9" />
                                <path d="M11.7081 9.69966L10.5414 12.6163C10.4216 12.9156 10.567 13.2554 10.8663 13.3752C11.1656 13.4951 11.5054 13.3496 11.6252 13.0503L12.7919 10.1337C12.9118 9.83437 12.7663 9.49459 12.467 9.37474C12.1677 9.2549 11.8279 9.40037 11.7081 9.69966Z" fill="#D9D9D9" />
                                <path d="M17.4586 9.69966C17.3387 9.40037 16.9989 9.2549 16.6997 9.37474C16.4004 9.49459 16.2549 9.83437 16.3747 10.1337L17.5414 13.0503C17.6189 13.2439 17.7939 13.3815 18.0003 13.4111C18.2067 13.4408 18.4133 13.3581 18.5422 13.1941C18.6711 13.0302 18.7028 12.8099 18.6252 12.6163L17.4586 9.69966Z" fill="#D9D9D9" />
                            </svg>
                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Санузлов:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['SANUZLOV']['VALUE']; ?></span>
                        </div>
                    </div>
                    <div class="product-info-v2__item product-info-v2-item">
                        <div class="product-info-v2-item__icon">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.3167 3.33333H26.6667V0.833333C26.6667 0.61232 26.5789 0.400358 26.4226 0.244078C26.2663 0.0877975 26.0543 0 25.8333 0C25.6123 0 25.4004 0.0877975 25.2441 0.244078C25.0878 0.400358 25 0.61232 25 0.833333V3.33333H10V0.833333C10 0.61232 9.9122 0.400358 9.75592 0.244078C9.59964 0.0877975 9.38768 0 9.16667 0C8.94565 0 8.73369 0.0877975 8.57741 0.244078C8.42113 0.400358 8.33333 0.61232 8.33333 0.833333V3.33333H4.68333C3.44124 3.33333 2.25001 3.82675 1.37172 4.70505C0.493421 5.58335 0 6.77457 0 8.01667V30.3167C0 31.5588 0.493421 32.75 1.37172 33.6283C2.25001 34.5066 3.44124 35 4.68333 35H30.3167C31.5588 35 32.75 34.5066 33.6283 33.6283C34.5066 32.75 35 31.5588 35 30.3167V8.01667C35 6.77457 34.5066 5.58335 33.6283 4.70505C32.75 3.82675 31.5588 3.33333 30.3167 3.33333ZM4.68333 5H30.3167C31.1167 5 31.884 5.31783 32.4498 5.88356C33.0155 6.4493 33.3333 7.2166 33.3333 8.01667V10H1.66667V8.01667C1.66667 7.2166 1.98449 6.4493 2.55023 5.88356C3.11596 5.31783 3.88326 5 4.68333 5ZM30.3167 33.3333H4.68333C3.88326 33.3333 3.11596 33.0155 2.55023 32.4498C1.98449 31.884 1.66667 31.1167 1.66667 30.3167V11.6667H33.3333V30.3167C33.3333 31.1167 33.0155 31.884 32.4498 32.4498C31.884 33.0155 31.1167 33.3333 30.3167 33.3333Z" fill="#D9D9D9" />
                            </svg>
                        </div>
                        <div class="product-info-v2-item__content">
                            <span class="product-info-v2-item__label">Срок строительства:</span>
                            <span class="product-info-v2-item__value"><?= $arResult['PROPERTIES']['SROK']['VALUE']; ?></span>
                        </div>
                    </div>
                </div>
                <!-- end product-info-->

                <?
                if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']) {
                    $discount_percent = floor(100 - ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arResult['PROPERTIES']['PRICE_STANDART']['VALUE']));
                }
                if ($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE']) {
                    $discount_percent_comfort = floor(100 - ($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE'] * 100 / $arResult['PROPERTIES']['PRICE_COMFORT']['VALUE']));
                }
                ?>
                <!-- finance-->
                <div class="finance-v2">
                    <div class="finance-v2__row">
                        <div class="finance-v2__item">
                            <span class="finance-v2__label">Стоимость дома:<br> <span style="text-transform: uppercase">Теплый контур</span></span>
                            <div class="finance-v2__value">
                                <span class="label-color-pink"><?= ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] ? number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ') : number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ')); ?> &#8381;</span>
                            </div>
                        </div>
                        <div class="finance-v2__item">
                            <div class="finance-v2__value">
                                <? if ($discount_percent): ?>
                                    <a class="js-modal-show-product finance-v2-show-product" href="#equipment" data-id="<?= $arResult['ID']; ?>">
                                        <span class="finance-v2__discount"><?= $discount_percent; ?>%</span>
                                        <span class="finance-v2__old"><span><?= number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?></span> &#8381;</span>
                                    </a>
                                <? endif; ?>
                            </div>
                        </div>
                        <div class="finance-v2__item">
                            <span class="finance-v2__label">Выбор комплектации и заявка</span>
                            <div class="finance-v2__value">
                                <a class="finance-v2__btn js-modal-show-product" href="#equipment" data-id="<?= $arResult['ID']; ?>">
                                    <span>Заявка</span>
                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.38268 0.554193L4.38268 9.1081L1.07455 6.17476C1.0169 6.12183 0.947935 6.07961 0.871683 6.05057C0.79543 6.02152 0.713418 6.00624 0.630431 6.0056C0.547444 6.00496 0.465144 6.01898 0.388334 6.04684C0.311523 6.07471 0.241741 6.11586 0.183058 6.16789C0.124375 6.21993 0.0779668 6.28181 0.0465412 6.34991C0.0151157 6.41802 -0.00069776 6.491 2.33785e-05 6.56458C0.000744517 6.63817 0.0179859 6.71089 0.0507416 6.7785C0.0834972 6.84612 0.131111 6.90727 0.190805 6.95839L4.56581 10.8377C4.68301 10.9416 4.84195 11 5.00768 11C5.17341 11 5.33235 10.9416 5.44955 10.8377L9.82456 6.95839C9.93841 6.85387 10.0014 6.71388 9.99998 6.56857C9.99855 6.42327 9.93282 6.28427 9.81694 6.18151C9.70106 6.07876 9.5443 6.02048 9.38043 6.01922C9.21656 6.01795 9.05868 6.07381 8.94081 6.17476L5.63268 9.1081L5.63268 0.554193C5.63268 0.407212 5.56683 0.26625 5.44962 0.162319C5.33241 0.0583876 5.17344 -1.99602e-07 5.00768 -1.93206e-07C4.84192 -1.86811e-07 4.68295 0.0583876 4.56574 0.162319C4.44853 0.26625 4.38268 0.407212 4.38268 0.554193Z" fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end finance-->

                <!-- desc-->
                <div class="desc-v2">
                    <div class="desc-v2__text">
                        <?= $arResult['DETAIL_TEXT']; ?>
                    </div>
                </div>
                <!-- end desc-->
            </div>
            <div class="product__right">
                <!-- product-carousel-->
                <div class="product-carousel-wrap">
                    <div class="product-carousel">
                        <?
                        foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
                            $img = CFile::ResizeImageGet($arPhoto, array('width' => 700, 'height' => 500), BX_RESIZE_IMAGE_PROPORTIONAL, true, getWatermark('watermark-white'));
                            $imgFull = CFile::ResizeImageGet($arPhoto, array('width' => 1920, 'height' => 1080), BX_RESIZE_IMAGE_PROPORTIONAL, true, getWatermark('watermark-white'));
                            if (!$img)
                                continue;
                            ?>
                            <div class="item"><a href="<?= $imgFull['src']; ?>" data-fancybox="product"><img src="<?= $img['src']; ?>" alt=""></a></div>
                        <? endforeach; ?>
                    </div>
                    <div class="product-carousel-nav">
                        <?
                        foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
                            $img = CFile::ResizeImageGet($arPhoto, array('width' => 130, 'height' => 80), BX_RESIZE_IMAGE_PROPORTIONAL, true, getWatermark('watermark-white'));
                            if (!$img)
                                continue;
                            ?>
                            <div class="item">
                                <div class="item__inner">
                                    <img src="<?= $img['src']; ?>" alt="">
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <!-- end product-carousel-->

                <!-- features-->
                <div class="features-v2">
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/shield_guaranty.svg" alt=""></div>
                        <span class="features-v2__text">5 лет гарантия <br> на строительство дома</span>
                    </div>
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/sp_icon.svg" alt=""></div>
                        <span class="features-v2__text">Строим согласно СП 31-105</span>
                    </div>
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/doski_coin_black.svg" alt=""></div>
                        <span class="features-v2__text">Пиломатериал камерной сушки</span>
                    </div>
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/qualityt_icon_black.svg" alt=""></div>
                        <span class="features-v2__text">Контроль качества <br> на линии</span>
                    </div>
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/worker_icon_black.svg" alt=""></div>
                        <span class="features-v2__text">Квалифицированные бригады</span>
                    </div>
                    <div class="features-v2__item">
                        <div class="features-v2__icon"><img src="/img/icons/qualityt_icon_2.svg" alt=""></div>
                        <span class="features-v2__text">Качественные комплектующие дома</span>
                    </div>
                </div>
                <!-- end features-->
            </div>

        </div>
    </div>
</div>
<!-- end product-->

<? if ($arResult['BANKI']): ?>
    <!-- banks-->
    <div class="banks-v2">
        <div class="container">
            <div class="banks-v2__grid">
                <div class="banks-v2__header">
                    <span class="banks-v2__title">Банки</span>
                    <span class="banks-v2__subtitle">Кредит и ипотека</span>
                </div>
                <? foreach ($arResult['BANKI'] as $arItem): ?>
                    <div class="banks-v2__item">
                        <!-- bank-link-->
                        <a class="banks-v2-link" href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
                            <img src="<?= CFILE::GetPath($arItem['LOGO']); ?>" alt="">
                            <span><?= $arItem['NAME']; ?>
                                <? if ($arItem['SECOND_TEXT']): ?>
                                    <span><?= $arItem['SECOND_TEXT']; ?></span>
                                <? endif; ?>
                            </span>
                        </a>
                        <!-- end bank-link-->
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end banks-->
<? endif; ?>

<!-- gallery-->
<div class="gallery">
    <div class="container">
        <ul class="gallery__nav tabs-nav">
            <li class="active"><a href="#tab1">Планировки</a></li>
            <li>/</li>
            <li><a href="#tab2">Все фасады</a></li>
        </ul>
        <div class="gallery__content">
            <div class="gallery__tab tab active" id="tab1">
                <? if ($arResult['PROPERTIES']['PLANS']['VALUE']): ?>
                    <div class="gallery__row">
                        <?
                        foreach ($arResult['PROPERTIES']['PLANS']['VALUE'] as $arPhoto):
                            $img = CFile::ResizeImageGet($arPhoto, array('width' => 800, 'height' => 800), BX_RESIZE_IMAGE_PROPORTIONAL, true, getWatermark('watermark-black'));
                            $imgFull = CFile::ResizeImageGet($arPhoto, array('width' => 1920, 'height' => 1080), BX_RESIZE_IMAGE_PROPORTIONAL, true, getWatermark('watermark-black'));
                            if (!$img)
                                continue;
                            ?>
                            <a class="gallery__item" href="<?= $imgFull['src']; ?>" data-fancybox="gallery1">
                                <img src="<?= $img['src']; ?>" alt="">
                            </a>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
            </div>
            <div class="gallery__tab tab" id="tab2">
                <? if ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE']): ?>
                    <div class="gallery__row">
                        <?
                        foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
                            $img = CFile::ResizeImageGet($arPhoto, array('width' => 800, 'height' => 800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                            if (!$img)
                                continue;
                            ?>
                            <a class="gallery__item" href="<?= CFILE::GetPath($arPhoto); ?>" data-fancybox="gallery1">
                                <img src="<?= $img['src']; ?>" alt="">
                            </a>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- end gallery-->

<?
$file_path = $_SERVER['DOCUMENT_ROOT'] . CFILE::GetPath($arResult['PROPERTIES']['FILE']['VALUE']);
$file_content = file_get_contents($file_path);

if ($file = fopen($file_path, "r")):
    $f_counter = 0; ?>
    <!-- equipment-->
    <div class="equipment-v2" id="equipment">
        <div class="container">
            <div class="equipment-v2__row equipment-v2__box equipment-v2__box--gred equipment-v2__box--gray">
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--main">
                    <span class="quipment-v2-card__title">Комплектации дома</span>
                    <span class="quipment-v2-card__subtitle">Размерность: <span><?= $arResult['PROPERTIES']['SIZE']['VALUE']; ?> м</span></span>
                    <span class="quipment-v2-card__text">Значком ⚡ отмечены выгодные отличия комплектации <span style="text-transform: uppercase">Заходи и живи</span>. Максимум комфорта по выгодной цене: можно въехать и жить!</span>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Теплый контур</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Базовая комплектация для летнего проживания</span>
                    <span class="quipment-v2-card__price">
                        <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' '); ?>
                        <? else: ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?>
                        <? endif; ?>
                        <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Теплый контур + коммуникации</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Выдерживает легкие холода</span>
                    <span class="quipment-v2-card__price">
                        <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE']): ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE'], 0, '.', ' '); ?>
                        <? else: ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' '); ?>
                        <? endif; ?>
                        <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Заходи и живи</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Теплый контур + коммуникации + финишная отделка</span>
                    <span class="quipment-v2-card__price">
                        <?= number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' '); ?>     <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
            </div>

            <div class="equipment-v2__row equipment-v2__box equipment-v2__box--border-pink equipment-v2__box--selected">
                <div class="equipment-v2__column quipment-v2-card">
                    <span class="quipment-v2-card__title">Выбранная комплектация</span>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title quipment-v2-card__title--active">Теплый контур</span>
                    <span class="quipment-v2-card__price quipment-v2-card__price--active">
                        <span>
                            <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
                                <?= number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' '); ?>
                            <? else: ?>
                                <?= number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?>
                            <? endif; ?>
                        </span>
                        <?/*<span>&#8381;</span>*/ ?>
                    </span>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex quipment-v2-card--full">
                    <a href="#js-modal-selected" data-id="<?= $arResult['ID']; ?>" class="quipment-v2-card__btn quipment-v2-card__btn--v2 js-modal-show js-modal-show-product">Отправить заявку</a>
                </div>
            </div>

            <div class="equipment-list">
                <?
                while (!feof($file)) {
                    $f_counter++;
                    $line = fgets($file); ?>

                    <? if (substr_count($line, '|') == 2): ?>
                        <div class="equipment-list__head">
                            <span class="equipment-list__title"><?= str_ireplace('|', '', $line); ?></span>
                        </div>

                        <?
                        continue;
                    endif;

                    $explode_line = explode(';', $line);
                    ?>

                    <div class="equipment-list__row">
                        <div class="equipment-list__item equipment-list__item--main"><?= $explode_line[0]; ?></div>
                        <div class="equipment-list__item equipment-list-item">
                            <span class="equipment-list-item__title">Теплый контур</span>
                            <? if (trim(strtolower($explode_line[1])) == 'да'): ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0ZM14.46 8.20996L9.45996 13.21C9.25976 13.3999 9.00976 13.5 8.75 13.5C8.49023 13.5 8.24023 13.3999 8.04004 13.21L5.54004 10.71C5.15039 10.3198 5.15039 9.68017 5.54004 9.29004C5.92969 8.8999 6.57031 8.8999 6.95996 9.29004L8.75 11.0898L13.04 6.79004C13.4297 6.3999 14.0703 6.3999 14.46 6.79004C14.8496 7.18018 14.8496 7.81982 14.46 8.20996Z" fill="#71C72E" />
                                </svg>
                            <? else: ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0Z" fill="#C72E2E" />
                                    <path d="M6 6L14 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                    <path d="M14 6L6 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            <? endif; ?>
                        </div>
                        <div class="equipment-list__item">
                            <span class="equipment-list-item__title">Теплый контур + коммуникации</span>
                            <? if (trim(strtolower($explode_line[2])) == 'да'): ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0ZM14.46 8.20996L9.45996 13.21C9.25976 13.3999 9.00976 13.5 8.75 13.5C8.49023 13.5 8.24023 13.3999 8.04004 13.21L5.54004 10.71C5.15039 10.3198 5.15039 9.68017 5.54004 9.29004C5.92969 8.8999 6.57031 8.8999 6.95996 9.29004L8.75 11.0898L13.04 6.79004C13.4297 6.3999 14.0703 6.3999 14.46 6.79004C14.8496 7.18018 14.8496 7.81982 14.46 8.20996Z" fill="#71C72E" />
                                </svg>
                            <? else: ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0Z" fill="#C72E2E" />
                                    <path d="M6 6L14 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                    <path d="M14 6L6 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            <? endif; ?>
                        </div>
                        <div class="equipment-list__item">
                            <span class="equipment-list-item__title">Заходи и живи</span>
                            <? if (trim(strtolower($explode_line[3])) == 'да'): ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0ZM14.46 8.20996L9.45996 13.21C9.25976 13.3999 9.00976 13.5 8.75 13.5C8.49023 13.5 8.24023 13.3999 8.04004 13.21L5.54004 10.71C5.15039 10.3198 5.15039 9.68017 5.54004 9.29004C5.92969 8.8999 6.57031 8.8999 6.95996 9.29004L8.75 11.0898L13.04 6.79004C13.4297 6.3999 14.0703 6.3999 14.46 6.79004C14.8496 7.18018 14.8496 7.81982 14.46 8.20996Z" fill="#71C72E" />
                                </svg>
                            <? else: ?>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 0H3C1.34961 0 0 1.3501 0 3V17C0 18.6499 1.34961 20 3 20H17C18.6504 20 20 18.6499 20 17V3C20 1.3501 18.6504 0 17 0Z" fill="#C72E2E" />
                                    <path d="M6 6L14 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                    <path d="M14 6L6 14" stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            <? endif; ?>
                        </div>
                    </div>
                    <?
                }
                ?>
            </div>

            <div class="equipment-v2__row equipment-v2__box equipment-v2__box--gray">
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--main">
                    <span class="quipment-v2-card__title">Комплектации дома</span>
                    <span class="quipment-v2-card__subtitle">Размерность: <span><?= $arResult['PROPERTIES']['SIZE']['VALUE']; ?> м</span></span>
                    <span class="quipment-v2-card__text">Значком ⚡ отмечены выгодные отличия комплектации <span style="text-transform: uppercase">Заходи и живи</span>. Максимум комфорта по выгодной цене: можно въехать и жить!</span>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Теплый контур</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Базовая комплектация для летнего проживания</span>
                    <span class="quipment-v2-card__price">
                        <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' '); ?>
                        <? else: ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?>
                        <? endif; ?>
                        <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Теплый контур + коммуникации</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Выдерживает легкие холода</span>
                    <span class="quipment-v2-card__price">
                        <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE']): ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_DISCOUNT_COMFORT']['VALUE'], 0, '.', ' '); ?>
                        <? else: ?>
                            <?= number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' '); ?>
                        <? endif; ?>
                        <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
                <div class="equipment-v2__column quipment-v2-card quipment-v2-card--flex">
                    <span class="quipment-v2-card__title">Заходи и живи</span>
                    <span class="quipment-v2-card__subtitle quipment-v2-card__subtitle--m">Теплый контур + коммуникации + финишная отделка</span>
                    <span class="quipment-v2-card__price">
                        <?= number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' '); ?>     <?/*<span>&#8381;</span>*/ ?>
                    </span>
                    <a href="javascript:;" class="quipment-v2-card__btn quipment-v2-card__btn--select">Выбрать</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end equipment-->
    <? fclose($file);
endif;
?>

<!-- callback-->
<div class="callback">
    <div class="container">
        <div class="callback__inner">
            <div class="callback__row">
                <div class="callback__left">
                    <p class="callback__title">Уже есть мечта?</p>
                    <p class="callback__text">Оставьте свои контактные данные и мы свяжемся с вами<br> в максимально сжатые сроки</p>
                </div>
                <div class="callback__right">
                    <!-- callback-form-->
                    <form class="callback-form" action="">
                        <div class="callback-form__inputs">
                            <input class="phone" type="tel" name="phone" placeholder="+7 (000) 000 - 00-00">
                        </div>
                        <button class="callback-form__btn" type="submit"><span>Перезвоните мне</span></button>
                    </form>
                    <!-- end callback-form-->
                </div>
            </div>
            <!-- callback-success-->
            <div class="callback-success">
                <div class="callback-success__wrap">
                    <p class="callback-success__title">Отправлено</p>
                    <p class="callback-success__text">Спасибо, ваше письмо отправлено. Мы постараемся связаться с вами как можно скорее для осуществления вашей мечты. </p>
                </div>
            </div>
            <!-- end callback-success-->
        </div>
    </div>
</div>
<!-- end callback-->