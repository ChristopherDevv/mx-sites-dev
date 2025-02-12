<style>
    :root {
        --color-primary: {{ config('angy.colors.primary') }};
        --color-secondary: {{ config('angy.colors.secondary') }};
        --color-third: {{ config('angy.colors.third') }};
        --color-fourth: {{ config('angy.colors.fourth') }};
        --color-fifth: {{ config('angy.colors.fifth') }};
        --color-textHover: {{ config('angy.colors.textHover') }};
        --color-formBg: {{ config('angy.colors.formBg') }};
        --color-darkGray: {{ config('angy.colors.darkGray') }};
        --color-mediumGray: {{ config('angy.colors.mediumGray') }};
        --color-neutralGray: {{ config('angy.colors.neutralGray') }};
        --color-lightGray: {{ config('angy.colors.lightGray') }};
        --color-grayWhite: {{ config('angy.colors.grayWhite') }};
        --color-navGray: {{ config('angy.colors.navGray') }};
    }
    body {
        background: {{ config('angy.brand.bg_color_preference') == 'dark' ? '#171717' : '#ffffff' }} !important;
        color: {{ config('angy.brand.bg_color_preference') == 'dark' ? '#ffffff' : '#171717' }};
    }
</style>

