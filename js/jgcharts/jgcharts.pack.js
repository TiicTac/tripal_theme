/*
 * 
 * jQuery Google Charts plugin 0.9
 * 
 * $Date: 2009/09/02 23:28:33 $
 * $Rev: 46 $
 * 
 * @requires
 * Sugar Arrays - Dustin Diaz | http://www.dustindiaz.com
 * 
 * Copyright (c) 2008 Massimiliano Balestrieri
 * Examples and docs at: http://maxb.net/blog/
 * Licensed GPL licenses:
 * http://www.gnu.org/licenses/gpl.html
 *
 */

eval(function(p,a,c,k,e,r){e=function(c){return(c<62?'':e(parseInt(c/62)))+((c=c%62)>35?String.fromCharCode(c+29):c.toString(36))};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'([2-9]|[12]\\w)'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3(!18.13)13={};13.1h=4(){2 m=0;2 k=0;2 l=0;2 q=0;2 bc="http://1I.apis.google.com/1I?";2 bd={19:"cht",1i:"chs",1c:"chd",1j:"chco",1K:"chds",1k:"chxt",1L:"chxr",1l:"chxl",1m:"chdl",1n:"chbh",1M:"chf",1o:"chm",1p:"chtt",1N:"chts",1q:"chg",1O:"chls",1w:"1w"};2 O=7;2 u=7;2 be=7;2 n=7;2 P=7;2 s=7;2 Q=7;2 h="1P";2 R="300x200";2 v=7;2 w=7;2 g=7;2 r=7;2 o=[];2 x=1;2 S="x,y";2 i=7;2 j=7;2 y=7;2 z=7;2 T="1x";2 U="1x";2 A=90;2 B=90;2 C=10;2 D=10;2 E=7;2 F=7;2 V=7;2 W=7;2 t=7;2 X=20;2 G=1;2 Y=7;2 H=10;2 I=10;2 J=10;2 K=0;2 L=7;2 bf=["5131C9","FFCC00","DA1B1B","FF9900","FF6600","CCFFFF","CCFF00","CCCCCC","FF99CC","999900","999999","66FF00","66CC00","669900","660099","33CC00","333399","000000"];2 Z=\'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\';4 bg(a,b){2 c=[];9(2 d=0;d<a.8;d++){2 e=a[d];3(!isNaN(e)&&e>=0){c.11(Z.charAt(Math.round((Z.8-1)*e/b)))}1d{c.11(\'_\')}}5 c.1S(\'\')}4 bh(){2 a=X;3(G)a+=","+G;5 a}4 bi(){3(!r.1e==12)1y 1s 1z("Legend 1V be 12");2 a="";9(2 b=0;b<r.8;b++)a+=r[b]+"|";a=p(a,"|");5 a}4 bj(){3(!g.1e==12)1y 1s 1z("1X 1V be 12");2 a=\'\';2 b=[];9(2 c=0;c<g.8;c++){3(g[c].1e!=12)g[c]=[g[c]];9(2 d=0;d<g[c].8;d++){3(!b[d])b[d]=[];b[d].11((g[c][d]));3(b[d].8>k){k=b[d].8;m=g[c].8}}3(O){M(1A(g[c]));N(1A(g[c]))}1d{M(g[c]);N(g[c])}}3(n&&t)b=bk(b);3(n&&W)b=bl(b);9(2 d=0;d<b.8;d++){a+=bg(b[d],l)+","}a=p(a,",");5"s:"+a}4 bl(a){2 b=[];9(2 c=1;c<=k;c++)b.11(0);a.11(b);5 a}4 bk(a){2 b=[];9(2 c=1;c<=k;c++)b.11(l);a.unshift(b);5 a}4 ba(){2 a="";2 b="";2 c=m;3(n&&t)c++;9(2 d=0;d<c;d++){b=1t[d]||bf[d];a+=b+","}a=p(a,",");5 a}4 bm(){5 q+","+l}4 M(a){3(a.1e==12)a.1a(4(nr){M(nr)});1d 3(l<a)l=a}4 N(a){3(a.1e==12)a.1a(4(nr){N(nr)});1d 3(q>a)q=a}4 bn(){5"0,"+q+","+l+"|1,"+q+","+l}4 bo(){2 a="";3(o.8==0&&k>10)x=17(k/10);3(u){2 b=[];9(2 c=o.8;c>0;c--)b.11(o[(c-1)]);o=b}9(2 c=0;c<k;c++){2 d=(c%x)==0?(o[c]||c):\'\';a+=d+"|"}a=p(a,"|");2 e=(u)?1:0;5 e+":|"+a}4 bp(){2 a=bb(T);2 b=bb(U);2 c="";3(i&&E)i+=17(E);3(i&&a=="s")c="bg,s,"+i;3(i&&a=="lg")c="bg,lg,"+A+","+i+",0,"+y+",1";3(i&&a=="ls")c="bg,ls,"+A+","+i+",0."+17(C/10)+","+y+",0."+17(C/10);3(j&&F)j+=17(F);3(j&&i)c+=\'|\';3(j&&b=="s")c+="c,s,"+j;3(j&&b=="lg")c+="c,lg,"+B+","+j+",0,"+z+",1";3(j&&b=="ls")c+="c,ls,"+B+","+j+",0."+17(D/10)+","+z+",0."+17(D/10);5 c}4 bb(a){3(a=="1x")5"s";3(a=="gradient")5"lg";3(a=="stripes")5"ls";5 a}4 bq(){2 c=[];2 d=\'\';3(n){c=ba(1t,t).split(",");c.1a(4(a,b){d+=\'b,\'+a+\',\'+b+\',\'+(b+1)+\',0|\'});d=p(d,"|")}5 d}4 br(){2 a=\'\';3(I>=0)a+=I;3(H>=0)a+=","+H;3(J>=0)a+=","+J;3(K>=0)a+=","+K;5 a}4 bs(){2 b="";L.1a(4(a){b+=a.1S(",")+"|"});b=p(b,"|");5 b}4 bt(a){3(13.1h.19.1b(a.19)!==-1)h=a.19;3(a.1i)R=a.1i;3(a.1c)g=a.1c;3(a.1m)r=a.1m;3(a.1l)o=a.1l;3(a.29)x=a.29;3(a.1j)1t=a.1j;1d 1t=[];3(a.2a)L=a.2a;3(a.1p)v=a.1p;3(a.2b&&a.2c)w=a.2b+","+a.2c;3(a.1n)X=a.1n;3(a.2d>=0)G=a.2d;3(a.1o)V=a.1o;3(a.2e)W=a.2e;3(a.2f)t=a.2f;3(a.1k)S=a.1k;3(a.bg)i=a.bg;3(a.2g)T=a.2g;3(a.2h)y=a.2h;3(a.2i)C=a.2i;3(a.2j>=0)A=a.2j;3(a.2k)E=a.2k;3(a.2l)j=a.2l;3(a.2m)U=a.2m;3(a.2n)z=a.2n;3(a.2o)D=a.2o;3(a.2p>=0)B=a.2p;3(a.2q)F=a.2q;3(a.1q){Y=a.1q;3(a.2r>=0)I=a.2r;3(a.2s>=0)H=a.2s;3(a.2t>=0)J=a.2t;3(a.2u>=0)K=a.2u}}4 f(a,b,c){2 d=c?"":"&";5 bd[a]+"="+b+d}4 bu(){be=h.1b("v")!==-1;u=h.1b("h")!==-1;O=h.1b("s")!==-1&&h!="ls"&&h!="lc";s=(h=="ls"||h=="lc");Q=(h=="p"||h=="p3");n=s&&V;P=h.1b("b")!==-1}4 p(a,b){5(a.1E(b)!==-1)?a.substr(0,a.1E(b)):a}5{2x:4(a){2 b=bc;bt(a);bu();b+=f("19",h);b+=f("1i",R);3(v)b+=f("1p",v);3(w)b+=f("1N",w);3(P){b+=f("1n",bh())}b+=f("1k",S);3(!Q&&r.8>0)b+=f("1m",bi());b+=f("1c",bj());b+=f("1K",bm());b+=f("1L",bn());b+=f("1l",bo());b+=f("1M",bp());b+=f("1j",ba());3(s&&L)b+=f("1O",bs());3(Y)b+=f("1q",br());3(s&&n)b+=f("1o",bq());b+=f("1w","2y",1F);5 b}}};13.1h.19=["bhs","bvs","bhg","1P","lc","ls","p","p3"];4 1A(c){5 2z(c,0,4(a,b){5 a+b})}4 2z(a,b,c){9(2 d=0;d<a.8;d++){b=c(b,a[d])}5 b}Function.1G.15=4(a,b){6.1G[a]=b;5 6};3(!12.1G.1a){12.15(\'1a\',4(a,b){2 c=b||18;9(2 d=0,e=6.8;d<e;++d){a.1g(c,6[d],d,6)}}).15(\'every\',4(a,b){2 c=b||18;9(2 d=0,e=6.8;d<e;++d){3(!a.1g(c,6[d],d,6)){5 7}}5 1F}).15(\'some\',4(a,b){2 c=b||18;9(2 d=0,e=6.8;d<e;++d){3(a.1g(c,6[d],d,6)){5 1F}}5 7}).15(\'map\',4(a,b){2 c=b||18;2 d=[];9(2 e=0,m=6.8;e<m;++e){d.11(a.1g(c,6[e],e,6))}5 d}).15(\'filter\',4(a,b){2 c=b||18;2 d=[];9(2 e=0,m=6.8;e<m;++e){3(!a.1g(c,6[e],e,6)){continue}d.11(6[e])}5 d}).15(\'1b\',4(a,b){2 b=b||0;9(2 c=b,d=6.8;c<d;++c){3(6[c]===a){5 c}}5-1}).15(\'1E\',4(a,b){2 b=b||6.8;3(b>=6.8){b=6.8}3(b<0){b=6.8+b}9(2 c=b;c>=0;--c){3(6[c]===a){5 c}}5-1})}13.2A={2B:4(c){c=1v.extend({},c);5 6.each(4(){3(!c.1c)1y 1s 1z("No 1X");2 a=1s 13.1h();2 b=a.2x(c);1v(\'<img>\').attr("src",b).2C(6);1v(\'<p>\'+b+\'</p>\').2C(6)})}};1v.fn.2y=13.2A.2B;',[],163,'||var|if|function|return|this|false|length|for||||||||||||||||||||||||||||||||||||||||||||||||||||||push|Array|jGCharts||method||parseInt|window|type|forEach|indexOf|data|else|constructor||call|Api|size|colors|axis_type|axis_labels|legend|bar_width|fillarea|title|grid||new|_colors||jQuery|agent|solid|throw|Error|sum||||lastIndexOf|true|prototype||chart||scaling|axis_range|background|title_style|line_style|bvg|||join|||must||Data||||||||||||axis_step|lines|title_color|title_size|bar_spacing|fillbottom|filltop|bg_type|bg_offset|bg_width|bg_angle|bg_trasparency|chbg|chbg_type|chbg_offset|chbg_width|chbg_angle|chbg_trasparency|grid_x|grid_y|grid_line|grid_blank|||make|jgcharts|foldl|Base|init|appendTo'.split('|'),0,{}))