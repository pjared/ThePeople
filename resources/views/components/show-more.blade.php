<p
    x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
    x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"

    >
    <span x-text="isCollapsed ? originalContent : content" class='text-gray-700'>
        {{ $content }}
    </span>
    <span x-show="originalContent.length > maxLength && !isCollapsed">
        ...
    </span>
    <button
        @click="isCollapsed = !isCollapsed"
        x-show="originalContent.length > maxLength"
        x-text="isCollapsed ? 'Show less' : 'Show more'"
        class="link"
        >
    </button>
</p>
