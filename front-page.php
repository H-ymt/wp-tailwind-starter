<?php get_header(); ?>
<div class="grid place-items-center py-20 mx-3">
  <h1 class="text-3xl md:text-[40px] leading-snug font-bold text-center">WordPress × Tailwind CSS<br />Starter template</h1>

  <div class="flex flex-wrap justify-center items-center gap-5 pt-8">
    <button type="button" class="button-primary">Primary</button>
    <button type="button" class="button-secondary">Secondary</button>
  </div>
</div>

<section class="container-width px-10 py-10">
  <h2 class="text-center">Feature</h2>
  <dl class="grid gap-14 max-w-3xl mx-auto py-12">
    <div class="flex items-center max-md:flex-wrap max-md:justify-center gap-8 px-6">
      <div class="w-[150px] grid place-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vitejs.svg" alt="Vite" width="75" height="75" loading="lazy" decoding="auto">
      </div>
      <div class="w-full">
        <dt class="pb-2 text-3xl font-bold">Vite</dt>
        <dd class="">モダンな開発環境に対応したフロントエンドビルドツール。他のビルドツールと比較して開発サーバーの起動・更新にかかる時間が少ない。</dd>
      </div>
    </div>

    <hr class="bg-border" />

    <div class="flex items-center max-md:flex-wrap max-md:justify-center gap-8 px-6">
      <div class="w-[150px] grid place-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tailwind-css.svg" alt="Tailwind CSS" width="75" height="75" loading="lazy" decoding="auto">
      </div>
      <div class="w-full">
        <dt class="pb-2 text-3xl font-bold">Tailwind CSS</dt>
        <dd class="">ユーティリティファーストなCSSフレームワーク。効率的な開発と自由度の高いカスタマイズが可能</dd>
      </div>
    </div>
  </dl>
</section>
<?php get_footer(); ?>