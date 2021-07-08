</div>
<div class="mt-4 p-4 border-t border-blue-200 flex justify-between">
    <div>
        <?php echo '&copy; ' . (new DateTime())->format('Y') . ' Al Imran Ahmed' ?>
    </div>

    <div class="flex">
        <a href="https://github.com/alimranahmed" target="_blank" class="mx-3">
            <x-uni-github-alt-thin />
        </a>
        <a href="https://twitter.com/al_imran_cse" target="_blank" class="mr-3">
            <x-uni-twitter-alt-thin class="text-blue-700"/>
        </a>
        <a href="https://www.linkedin.com/in/alimrancse/" target="_blank" class="mr-3">
            <x-uni-linkedin-alt-thin class="text-blue-900"/>
        </a>
        <a href="https://www.youtube.com/channel/UC14rfvux_ri5gC4l9AeV1UA" target="_blank">
            <x-uni-youtube-thin class="text-red-700"/>
        </a>
    </div>

    <div>
        <a href="{{route('contact')}}">Contact</a>
    </div>
</div>

@livewireScripts
<script src="{{ mix("build/js/app.js") }}"></script>
<script src="{{asset('js/prism.js')}}" defer></script>

</body>
</html>