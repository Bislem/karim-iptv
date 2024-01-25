<div x-data="{}" x-init="$nextTick(() => {
    let ul = $refs.logos;
    ul.insertAdjacentHTML('afterend', ul.outerHTML);
    ul.nextSibling.setAttribute('aria-hidden', 'true');
})" class="w-full inline-flex max-w-screen overflow-hidden bg-gray-800 flex-nowrap">
    <ul class="flex items-center justify-center md:justify-start py-2 bg-gray-800 [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/1.png" alt="1" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/2.png" alt="2" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/3.png" alt="3" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/4.png" alt="4" />
        </li>
    </ul>
    <ul class="flex items-center justify-center md:justify-start py-2 bg-gray-800 [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/1.png" alt="1" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/2.png" alt="2" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/3.png" alt="3" />
        </li>
        <li>
            <img class="h-[40px] w-auto" src="/images/carousel/4.png" alt="4" />
        </li>
    </ul>
</div>

