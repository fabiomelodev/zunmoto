<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GiroMoto — Encontre vagas de entrega ou motoboys em minutos</title>
<meta name="description" content="A plataforma que conecta motoboys e entregadores a comércios e restaurantes que precisam de reforço. Publique vagas ou candidate-se em minutos, sem burocracia.">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800|sora:600,700,800" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'ui-sans-serif', 'system-ui'],
          display: ['Sora', 'ui-sans-serif', 'system-ui'],
        },
        colors: {
          brand: {
            50: '#fff7ed', 100: '#ffedd5', 200: '#fed7aa', 300: '#fdba74',
            400: '#fb923c', 500: '#f97316', 600: '#ea580c', 700: '#c2410c',
            800: '#9a3412', 900: '#7c2d12',
          },
          ink: {
            50: '#f8fafc', 100: '#f1f5f9', 200: '#e2e8f0', 300: '#cbd5e1',
            400: '#94a3b8', 500: '#64748b', 600: '#475569', 700: '#334155',
            800: '#1e293b', 900: '#0f172a', 950: '#020617',
          },
        },
      },
    },
  }
</script>

<style>
  [x-cloak] { display: none !important; }
  html { scroll-padding-top: 88px; }
</style>
</head>

<body class="font-sans text-ink-800 bg-white antialiased">

<!-- CTA target: aponta para a instância do sistema GiroMoto -->
<?php $appUrl = 'http://appgiromoto.test'; ?>

<div x-data="{ mobileOpen: false, audience: 'motoboy' }">

  <!-- NAVBAR -->
  <header class="fixed top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-md border-b border-ink-100">
    <nav class="max-w-7xl mx-auto px-5 sm:px-8 h-18 py-3 flex items-center justify-between">
      <a href="#top" class="flex items-center gap-2">
        <span class="w-9 h-9 rounded-xl bg-brand-500 flex items-center justify-center shadow-sm shadow-brand-500/30">
          <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5 text-white"><path d="M5 17a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm14 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" stroke="currentColor" stroke-width="2"/><path d="M8 17h3m5 0h-2M5 11l2-5h4l1 3m3 2 2.4-1.6a1 1 0 0 0 .2-1.5L16 5h-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
        <span class="font-display font-800 text-lg tracking-tight text-ink-900">Giro<span class="text-brand-600">Moto</span></span>
      </a>

      <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-ink-600">
        <a href="#como-funciona" class="hover:text-ink-900 transition">Como funciona</a>
        <a href="#recursos" class="hover:text-ink-900 transition">Recursos</a>
        <a href="#publico" class="hover:text-ink-900 transition">Para quem é</a>
        <a href="#faq" class="hover:text-ink-900 transition">Dúvidas</a>
      </div>

      <div class="hidden lg:flex items-center gap-3">
        <a href="<?= $appUrl ?>/login" class="text-sm font-semibold text-ink-700 hover:text-ink-900 px-4 py-2 transition">Entrar</a>
        <a href="<?= $appUrl ?>/login" class="text-sm font-semibold text-white bg-ink-900 hover:bg-brand-600 rounded-full px-5 py-2.5 transition shadow-sm">
          Criar conta grátis
        </a>
      </div>

      <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 -mr-2 text-ink-700" aria-label="Abrir menu">
        <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </nav>

    <div x-show="mobileOpen" x-cloak x-transition class="lg:hidden border-t border-ink-100 bg-white px-5 py-4 space-y-3">
      <a @click="mobileOpen=false" href="#como-funciona" class="block py-2 text-ink-700 font-medium">Como funciona</a>
      <a @click="mobileOpen=false" href="#recursos" class="block py-2 text-ink-700 font-medium">Recursos</a>
      <a @click="mobileOpen=false" href="#publico" class="block py-2 text-ink-700 font-medium">Para quem é</a>
      <a @click="mobileOpen=false" href="#faq" class="block py-2 text-ink-700 font-medium">Dúvidas</a>
      <div class="pt-3 flex flex-col gap-2">
        <a href="<?= $appUrl ?>/login" class="text-center font-semibold text-ink-700 border border-ink-200 rounded-full px-5 py-2.5">Entrar</a>
        <a href="<?= $appUrl ?>/login" class="text-center font-semibold text-white bg-brand-600 rounded-full px-5 py-2.5">Criar conta grátis</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section id="top" class="relative pt-36 pb-20 sm:pt-44 sm:pb-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="assets/hero-motoboy.jpg" alt="" aria-hidden="true" fetchpriority="high"
           class="absolute inset-0 w-full h-full object-cover object-[center_30%]">
      <!-- overlay: cor da marca + gradiente escuro p/ legibilidade do texto -->
      <div class="absolute inset-0 bg-brand-600/45 mix-blend-multiply"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-ink-950/95 via-ink-950/60 to-ink-950/20"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-ink-950/80 via-transparent to-ink-950/10"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 grid lg:grid-cols-2 gap-14 items-center">
      <div>
        <span class="inline-flex items-center gap-2 text-xs font-semibold text-brand-300 bg-brand-500/10 border border-brand-500/30 rounded-full px-3 py-1.5 mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-brand-400 animate-pulse"></span>
          Vagas de entrega, sem intermediário
        </span>

        <h1 class="font-display font-800 text-4xl sm:text-5xl lg:text-[3.4rem] leading-[1.08] tracking-tight text-white">
          Conecte quem precisa <span class="text-brand-400">entregar</span> com quem precisa <span class="text-brand-400">de reforço</span>
        </h1>

        <p class="mt-6 text-lg text-ink-300 max-w-xl leading-relaxed">
          O GiroMoto une motoboys e entregadores a restaurantes e comércios em um só lugar: vagas por turno, chat em tempo real, mapa com distância e pagamento combinado direto entre as partes — sem taxa de intermediação.
        </p>

        <div class="mt-9 flex flex-col sm:flex-row gap-3">
          <a href="<?= $appUrl ?>/login" class="inline-flex items-center justify-center gap-2 whitespace-nowrap bg-brand-500 hover:bg-brand-400 text-white font-semibold rounded-full px-7 py-3.5 shadow-lg shadow-brand-500/25 transition">
            Sou motoboy — quero vagas
            <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
          </a>
          <a href="<?= $appUrl ?>/login" class="inline-flex items-center justify-center gap-2 whitespace-nowrap bg-white/10 hover:bg-white/15 text-white font-semibold rounded-full px-7 py-3.5 border border-white/20 backdrop-blur transition">
            Sou empresa — quero contratar
          </a>
        </div>

        <div class="mt-10 flex items-center gap-6 text-ink-400 text-sm">
          <div class="flex items-center gap-1.5">
            <svg class="w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Cadastro grátis
          </div>
          <div class="flex items-center gap-1.5">
            <svg class="w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Sem mensalidade
          </div>
          <div class="flex items-center gap-1.5">
            <svg class="w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            Pronto em 2 min
          </div>
        </div>
      </div>

      <!-- mock preview card -->
      <div class="relative">
        <div class="absolute -inset-6 bg-gradient-to-tr from-brand-500/20 to-transparent rounded-[2rem] blur-2xl"></div>
        <div class="relative bg-white rounded-3xl shadow-2xl shadow-black/40 border border-white/10 p-5 max-w-sm mx-auto">
          <div class="flex items-center justify-between mb-4">
            <span class="text-xs font-semibold text-ink-400 uppercase tracking-wide">Vagas perto de você</span>
            <span class="text-xs font-semibold text-brand-600 bg-brand-50 rounded-full px-2.5 py-1">3 novas</span>
          </div>

          <div class="space-y-3">
            <div class="flex items-center gap-3 rounded-2xl border border-ink-100 p-3">
              <div class="w-11 h-11 rounded-xl bg-brand-50 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0 0l-4-4m4 4l4-4"/></svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm text-ink-900 truncate">Burger House — Centro</p>
                <p class="text-xs text-ink-500">Hoje, 18h–23h · 1,2 km</p>
              </div>
              <span class="text-sm font-bold text-ink-900 shrink-0">R$ 8</span>
            </div>

            <div class="flex items-center gap-3 rounded-2xl border border-ink-100 p-3">
              <div class="w-11 h-11 rounded-xl bg-brand-50 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m0 0l-4-4m4 4l4-4"/></svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm text-ink-900 truncate">Farmácia Vida — Jardins</p>
                <p class="text-xs text-ink-500">Amanhã, 14h–18h · 2,8 km</p>
              </div>
              <span class="text-sm font-bold text-ink-900 shrink-0">R$ 7</span>
            </div>

            <div class="flex items-center gap-3 rounded-2xl border border-brand-200 bg-brand-50/60 p-3">
              <div class="w-11 h-11 rounded-xl bg-brand-500 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </div>
              <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm text-ink-900 truncate">Mercado Bom Preço</p>
                <p class="text-xs text-brand-700 font-medium">Interesse aceito ✓</p>
              </div>
              <span class="text-sm font-bold text-ink-900 shrink-0">R$ 9</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LOGOS / TRUST STRIP -->
  <section class="border-b border-ink-100 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 py-8 flex flex-wrap items-center justify-center gap-x-10 gap-y-4 text-ink-400 text-sm font-medium">
      <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg> Restaurantes</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg> Farmácias</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg> Mercados</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg> Distribuidoras</span>
      <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg> Lojas locais</span>
    </div>
  </section>

  <!-- COMO FUNCIONA -->
  <section id="como-funciona" class="py-24 bg-ink-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Como funciona</span>
        <h2 class="font-display font-800 text-3xl sm:text-4xl text-ink-900 mt-3">Do cadastro à primeira entrega, em minutos</h2>
      </div>

      <div class="flex justify-center mb-12">
        <div class="inline-flex bg-white border border-ink-200 rounded-full p-1 shadow-sm">
          <button @click="audience = 'motoboy'" :class="audience === 'motoboy' ? 'bg-ink-900 text-white' : 'text-ink-600'" class="px-5 py-2 rounded-full text-sm font-semibold transition">Sou motoboy</button>
          <button @click="audience = 'empresa'" :class="audience === 'empresa' ? 'bg-ink-900 text-white' : 'text-ink-600'" class="px-5 py-2 rounded-full text-sm font-semibold transition">Sou empresa</button>
        </div>
      </div>

      <div x-show="audience === 'motoboy'" x-transition class="grid lg:grid-cols-2 gap-10 items-center">
        <div class="space-y-5 order-2 lg:order-1">
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">1</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Crie sua conta</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Cadastre seus dados, veículo e documentos. Leva menos de 2 minutos, sem custo.</p>
          </div>
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">2</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Encontre vagas perto de você</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Veja turnos disponíveis no mapa, filtre por distância, taxa e horário, e candidate-se com um toque.</p>
          </div>
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">3</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Converse, confirme e trabalhe</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Combine os detalhes pelo chat, confirme a parceria e avalie a experiência ao final.</p>
          </div>
        </div>
        <div class="order-1 lg:order-2">
          <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] lg:aspect-auto lg:h-full lg:min-h-[26rem]">
            <img src="assets/how-it-works-courier.jpg" alt="Motoboy ao lado da moto, pronto para fazer entregas" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-ink-950/70 via-ink-950/0 to-transparent"></div>
          </div>
        </div>
      </div>

      <div x-show="audience === 'empresa'" x-transition x-cloak class="grid lg:grid-cols-2 gap-10 items-center">
        <div class="space-y-5 order-2 lg:order-1">
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">1</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Publique a vaga</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Informe endereço, horário, taxa por entrega e quantos motoboys precisa. Pronto em segundos.</p>
          </div>
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">2</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Receba candidaturas</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Veja o perfil, avaliação e veículo de cada interessado e aceite quem preferir.</p>
          </div>
          <div class="bg-white rounded-2xl p-7 border border-ink-100 shadow-sm">
            <span class="w-10 h-10 rounded-xl bg-brand-500 text-white font-bold font-display flex items-center justify-center mb-5">3</span>
            <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Gerencie tudo em um lugar</h3>
            <p class="text-ink-500 text-sm leading-relaxed">Edite, pause ou clone vagas, acompanhe o histórico e avalie o entregador depois da entrega.</p>
          </div>
        </div>
        <div class="order-1 lg:order-2">
          <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] lg:aspect-auto lg:h-full lg:min-h-[26rem]">
            <img src="assets/how-it-works-business.jpg" alt="Dona de comércio na porta do seu estabelecimento" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-ink-950/70 via-ink-950/0 to-transparent"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RECURSOS -->
  <section id="recursos" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Recursos</span>
        <h2 class="font-display font-800 text-3xl sm:text-4xl text-ink-900 mt-3">Tudo o que uma boa entrega precisa</h2>
        <p class="text-ink-500 mt-4">Ferramentas pensadas para o dia a dia de quem entrega e de quem contrata.</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/><circle cx="12" cy="11" r="3"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Mapa com vagas ao redor</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Visualize as oportunidades geolocalizadas e a distância exata até cada uma antes de aceitar.</p>
        </div>

        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8-1.5 0-2.91-.32-4.14-.88L3 20l1.06-3.18C3.39 15.66 3 14.38 3 13c0-4.418 4.03-8 9-8s9 3.582 9 7z"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Chat em tempo real</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Combine detalhes direto pelo app, com notificações instantâneas quando chegar uma nova mensagem.</p>
        </div>

        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Avaliações mútuas</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Motoboys e empresas se avaliam após cada entrega, construindo reputação e mais confiança.</p>
        </div>

        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Notificações instantâneas</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Saiba na hora quando surge uma vaga compatível, uma candidatura ou uma mensagem nova.</p>
        </div>

        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Gestão completa da vaga</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Edite, pause, clone ou encerre vagas a qualquer momento, com histórico de tudo que foi publicado.</p>
        </div>

        <div class="p-7 rounded-2xl border border-ink-100 hover:border-brand-200 hover:shadow-lg hover:shadow-brand-500/5 transition">
          <div class="w-12 h-12 rounded-xl bg-brand-50 flex items-center justify-center mb-5">
            <svg class="w-6 h-6 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 17h2v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-4a4 4 0 10-4-4 4 4 0 004 4zm6 4a4 4 0 10-4-4"/></svg>
          </div>
          <h3 class="font-display font-700 text-lg text-ink-900 mb-2">Qualquer veículo, qualquer perfil</h3>
          <p class="text-ink-500 text-sm leading-relaxed">Moto, bike elétrica ou bike convencional — cada motoboy mostra o que tem e escolhe as vagas certas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAMADA PARA O SISTEMA -->
  <section class="pt-20 pb-16 sm:pt-24 sm:pb-20 bg-white">
    <div class="max-w-6xl mx-auto px-5 sm:px-8">
      <div class="relative overflow-visible rounded-3xl bg-gradient-to-br from-brand-500 to-brand-700 shadow-xl shadow-brand-500/20 px-6 pt-44 pb-10 text-center sm:pt-52 md:pl-72 md:pr-12 md:py-12 md:pt-12 md:text-left lg:pl-[21rem]">
        <img src="assets/cta-courier-cutout.png" alt="Motoboy sorridente, de braços cruzados, ao lado da moto"
             style="-webkit-mask-image:linear-gradient(to right, transparent 0%, black 12%); mask-image:linear-gradient(to right, transparent 0%, black 12%);"
             class="pointer-events-none absolute left-1/2 -top-20 h-56 w-auto -translate-x-1/2 object-contain drop-shadow-2xl sm:-top-24 sm:h-64 md:left-2 md:top-auto md:bottom-0 md:h-[26rem] md:-translate-x-0 lg:left-4 lg:h-[30rem]">

        <h2 class="font-display font-800 text-2xl sm:text-3xl text-white mb-4">
          Sua próxima vaga — ou seu próximo motoboy — está a um clique
        </h2>
        <p class="text-white/90 leading-relaxed mb-7 max-w-xl mx-auto md:mx-0">
          Crie sua conta grátis e acesse agora: motoboys encontram vagas por perto, empresas encontram quem entrega. Simples, rápido e sem burocracia.
        </p>
        <a href="<?= $appUrl ?>/login" class="inline-flex items-center gap-2 bg-white hover:bg-brand-50 text-brand-700 font-semibold rounded-full px-6 py-3 shadow-lg transition">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h11m0-9h1a3 3 0 013 3v8a3 3 0 01-3 3h-1"/></svg>
          Acessar o sistema
        </a>
      </div>
    </div>
  </section>

  <!-- PUBLICO / BENEFÍCIOS -->
  <section id="publico" class="py-24 bg-ink-50">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 grid lg:grid-cols-2 gap-8">
      <div class="bg-white rounded-3xl p-8 sm:p-10 border border-ink-100 shadow-sm">
        <span class="inline-flex items-center gap-2 text-xs font-semibold text-brand-700 bg-brand-50 rounded-full px-3 py-1.5 mb-5">Para motoboys e entregadores</span>
        <h3 class="font-display font-800 text-2xl text-ink-900 mb-5">Mais vagas, mais liberdade</h3>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-600">Escolha os turnos que fazem sentido pra sua rotina, sem escala fixa.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-600">Veja a taxa por entrega, distância e benefícios (bag, combustível, refeição) antes de aceitar.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-600">Construa uma reputação com avaliações e conquiste vagas melhores.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-500 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-600">Sem taxa de intermediação sobre o que você recebe.</span>
          </li>
        </ul>
        <a href="<?= $appUrl ?>/login" class="mt-8 inline-flex items-center gap-2 text-brand-600 font-semibold hover:text-brand-700 transition">
          Cadastrar como motoboy
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
        </a>
      </div>

      <div class="bg-ink-900 rounded-3xl p-8 sm:p-10 shadow-sm">
        <span class="inline-flex items-center gap-2 text-xs font-semibold text-brand-300 bg-brand-500/10 border border-brand-500/30 rounded-full px-3 py-1.5 mb-5">Para restaurantes e comércios</span>
        <h3 class="font-display font-800 text-2xl text-white mb-5">Reforço rápido, sem contrato fixo</h3>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-300">Publique vagas por turno ou por demanda, sem vínculo empregatício.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-300">Escolha entre os candidatos pelo perfil, avaliação e veículo.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-300">Clone vagas recorrentes em um clique e economize tempo toda semana.</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-ink-300">Acompanhe tudo pelo histórico: quem trabalhou, quando e como foi avaliado.</span>
          </li>
        </ul>
        <a href="<?= $appUrl ?>/login" class="mt-8 inline-flex items-center gap-2 text-brand-400 font-semibold hover:text-brand-300 transition">
          Publicar minha primeira vaga
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- VÍDEO DEMONSTRATIVO -->
  <section class="py-24 bg-brand-50">
    <div class="max-w-4xl mx-auto px-5 sm:px-8">
      <div class="text-center max-w-2xl mx-auto mb-12">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Veja na prática</span>
        <h2 class="font-display font-800 text-3xl sm:text-4xl text-ink-900 mt-3">Publicar uma vaga leva menos de 1 minuto</h2>
        <p class="text-ink-500 mt-4">Acompanhe um dono de restaurante criando uma vaga para motoboy direto pelo GiroMoto.</p>
      </div>

      <div class="relative rounded-3xl overflow-hidden shadow-2xl shadow-ink-900/10 border border-ink-100 bg-ink-950">
        <video src="assets/video.mp4" autoplay loop muted playsinline controls class="block h-auto w-full">
          Seu navegador não suporta vídeo HTML5.
        </video>
      </div>
    </div>
  </section>

  <!-- DEPOIMENTOS -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Depoimentos</span>
        <h2 class="font-display font-800 text-3xl sm:text-4xl text-ink-900 mt-3">Quem usa, recomenda</h2>
      </div>

      <div class="grid sm:grid-cols-3 gap-6">
        <div class="bg-ink-50 rounded-2xl p-7 border border-ink-100">
          <div class="flex gap-1 text-brand-500 mb-4">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
          </div>
          <p class="text-ink-700 text-sm leading-relaxed mb-5">"Consigo fechar minha agenda da semana em minutos. O mapa mostra a distância exata e evito vagas longe de casa."</p>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-brand-500 text-white text-sm font-bold flex items-center justify-center">R</div>
            <div>
              <p class="text-sm font-semibold text-ink-900">Rafael</p>
              <p class="text-xs text-ink-500">Motoboy</p>
            </div>
          </div>
        </div>

        <div class="bg-ink-50 rounded-2xl p-7 border border-ink-100">
          <div class="flex gap-1 text-brand-500 mb-4">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
          </div>
          <p class="text-ink-700 text-sm leading-relaxed mb-5">"Nos dias de pico, publico a vaga e em minutos já tenho candidatos. O chat integrado facilita muito combinar os detalhes."</p>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-brand-500 text-white text-sm font-bold flex items-center justify-center">C</div>
            <div>
              <p class="text-sm font-semibold text-ink-900">Camila</p>
              <p class="text-xs text-ink-500">Dona de restaurante</p>
            </div>
          </div>
        </div>

        <div class="bg-ink-50 rounded-2xl p-7 border border-ink-100">
          <div class="flex gap-1 text-brand-500 mb-4">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.5 3 1.5-6L1 7.5l6-.5L10 1l3 6 6 .5-4.5 4.5 1.5 6z"/></svg>
          </div>
          <p class="text-ink-700 text-sm leading-relaxed mb-5">"Uso a bike elétrica e sempre acho vagas compatíveis. As avaliações me ajudaram a conseguir os melhores comércios da região."</p>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-brand-500 text-white text-sm font-bold flex items-center justify-center">J</div>
            <div>
              <p class="text-sm font-semibold text-ink-900">Juliana</p>
              <p class="text-xs text-ink-500">Entregadora</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-24 bg-ink-50">
    <div class="max-w-3xl mx-auto px-5 sm:px-8">
      <div class="text-center mb-14">
        <span class="text-brand-600 font-semibold text-sm uppercase tracking-wide">Dúvidas frequentes</span>
        <h2 class="font-display font-800 text-3xl sm:text-4xl text-ink-900 mt-3">Perguntas que recebemos bastante</h2>
      </div>

      <div class="space-y-3" x-data="{ open: 0 }">
        <template x-for="(item, index) in [
          { q: 'Usar o GiroMoto tem algum custo?', a: 'O cadastro é gratuito tanto para motoboys quanto para empresas. Não cobramos mensalidade nem taxa sobre o valor combinado entre as partes.' },
          { q: 'Como funciona o pagamento pela entrega?', a: 'O valor por entrega é combinado diretamente entre a empresa e o motoboy, exibido de forma clara na vaga antes da candidatura.' },
          { q: 'Preciso ter moto para me cadastrar?', a: 'Não. Você pode se cadastrar com moto, bike elétrica ou bike convencional, e ver apenas as vagas compatíveis com seu veículo.' },
          { q: 'Como sei que a vaga é confiável?', a: 'Empresas e motoboys constroem reputação por avaliações mútuas após cada entrega, visíveis no perfil de cada um.' },
          { q: 'Consigo publicar vagas recorrentes toda semana?', a: 'Sim. Você pode clonar uma vaga já publicada e reaproveitar os dados, editando apenas o que mudar.' },
        ]" :key="index">
          <div class="bg-white rounded-2xl border border-ink-100 overflow-hidden">
            <button @click="open = open === index ? -1 : index" class="w-full flex items-center justify-between gap-4 text-left px-6 py-5">
              <span class="font-semibold text-ink-900" x-text="item.q"></span>
              <svg class="w-5 h-5 text-ink-400 shrink-0 transition-transform" :class="open === index ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div x-show="open === index" x-collapse x-cloak class="px-6 pb-5 text-ink-500 text-sm leading-relaxed" x-text="item.a"></div>
          </div>
        </template>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="py-24 bg-ink-950 relative overflow-hidden">
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[36rem] h-[36rem] bg-brand-600/25 rounded-full blur-3xl"></div>
    <div class="relative max-w-3xl mx-auto px-5 sm:px-8 text-center">
      <h2 class="font-display font-800 text-3xl sm:text-4xl text-white mb-5">Pronto para começar?</h2>
      <p class="text-ink-300 text-lg mb-10">Junte-se a motoboys e comércios que já usam o GiroMoto para preencher vagas de entrega sem burocracia.</p>
      <div class="flex flex-col sm:flex-row gap-3 justify-center">
        <a href="<?= $appUrl ?>/login" class="inline-flex items-center justify-center gap-2 bg-brand-500 hover:bg-brand-400 text-white font-semibold rounded-full px-8 py-3.5 shadow-lg shadow-brand-500/25 transition">
          Criar minha conta grátis
        </a>
        <a href="<?= $appUrl ?>/login" class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/15 text-white font-semibold rounded-full px-8 py-3.5 border border-white/20 transition">
          Já tenho conta — entrar
        </a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-ink-950 border-t border-white/10 pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-10">
        <div>
          <a href="#top" class="flex items-center gap-2 mb-4">
            <span class="w-8 h-8 rounded-lg bg-brand-500 flex items-center justify-center">
              <svg viewBox="0 0 24 24" fill="none" class="w-4 h-4 text-white"><path d="M5 17a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm14 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" stroke="currentColor" stroke-width="2"/><path d="M8 17h3m5 0h-2M5 11l2-5h4l1 3m3 2 2.4-1.6a1 1 0 0 0 .2-1.5L16 5h-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span class="font-display font-800 text-white">Giro<span class="text-brand-500">Moto</span></span>
          </a>
          <p class="text-ink-400 text-sm leading-relaxed">Conectando motoboys, entregadores e comércios em vagas de entrega por turno.</p>
        </div>

        <div>
          <h4 class="text-white font-semibold text-sm mb-4">Plataforma</h4>
          <ul class="space-y-2.5 text-sm text-ink-400">
            <li><a href="#como-funciona" class="hover:text-white transition">Como funciona</a></li>
            <li><a href="#recursos" class="hover:text-white transition">Recursos</a></li>
            <li><a href="#faq" class="hover:text-white transition">Dúvidas frequentes</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold text-sm mb-4">Acesso</h4>
          <ul class="space-y-2.5 text-sm text-ink-400">
            <li><a href="<?= $appUrl ?>/login" class="hover:text-white transition">Entrar</a></li>
            <li><a href="<?= $appUrl ?>/login" class="hover:text-white transition">Criar conta</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold text-sm mb-4">Contato</h4>
          <ul class="space-y-2.5 text-sm text-ink-400">
            <li>contato@giromoto.com.br</li>
          </ul>
        </div>
      </div>

      <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-ink-500">
        <p>&copy; <?= date('Y') ?> GiroMoto. Todos os direitos reservados.</p>
        <p>Feito para quem entrega e para quem precisa entregar.</p>
      </div>
    </div>
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
