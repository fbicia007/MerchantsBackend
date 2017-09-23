<?php

namespace AppBundle\Controller;

use AppBundle\Form\MemberType;
use Doctrine\DBAL\Types\JsonArrayType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\ChoiceList\ArrayChoiceList;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Shop;
use AppBundle\Entity\Member;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpKernel\DataCollector\TimeDataCollector;
use Symfony\Component\Validator\Constraints\DateTime;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $userName = $user->getUsername();

        if($userName != 'admin')
        {
            $userId = $user->getId();

            $userFirstlogin= $user->getFirstlogin();


            $shop = $this->getDoctrine()
                ->getRepository('AppBundle:Shop')
                ->findOneBy(['userId' => $userId]);

            if($userFirstlogin){

                dump($shop);

                // replace this example code with whatever you need
                return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
                    'shop' => $shop,
                    'userId' => $userId
                ]);

            }else{

                //$member = new Member();


                $user->setFirstlogin(1);
                $em = $this->getDoctrine()->getManager();

                $em->persist($user);
                $em->flush();

                return $this->render('default/create.html.twig', [
                    'shop' => $shop,
                    'userId' => $userId
                ]);

            }


        }
        else{
            return $this->render('default/admin.html.twig', [
            ]);
        }



    }

    /**
     * @Route("/create", name="shop_create")
     */
    public function createAction(Request $request)
    {
        $userId = $this->getUser()->getId();

        $user = $this->getUser();

        $shop = $this->getDoctrine()
            ->getRepository('AppBundle:Shop')
            ->findOneBy(['userId' => $userId]);

        $shop->setShopName('test shop');
        $payment =  ['VISA'=>'VISA', 'MasterCard'=>'MasterCard', 'Maestro'=>'Maestro', 'Cirrus'=>'Cirrus', 'PayPal'=>'PayPal'];
        //$brand =  ['化妆护肤'=>'1', '日化母婴'=>'2', '鞋'=>'3', '珠宝钟表'=>'4', '数码产品'=>'5','厨房家居'=>'6', '运动户外'=>'7', '眼镜'=>'8', '儿童用品'=>'9', '服装'=>'10','箱包皮具'=>'11'];
        //$brand =  ['化妆护肤'=>[], '日化母婴'=>[]];
        $type =  [
            '化妆护肤'=>'化妆护肤',
            '日化母婴'=>'日化母婴',
            '鞋'=>'鞋',
            '珠宝钟表'=>'珠宝钟表',
            '数码产品'=>'数码产品',
            '厨房家居'=>'厨房家居',
            '百货商场'=>'百货商场',
            '运动户外'=>'运动户外',
            '眼镜'=>'眼镜',
            '儿童用品'=>'儿童用品',
            '便民超市'=>'便民超市',
            '服装'=>'服装',
            '奢侈品'=>'奢侈品',
            '箱包皮具'=>'箱包皮具'
        ];
        $suffix =  [
            '综合化妆品'=>'综合化妆品',
            '香水店'=>'香水店',
            '药房药妆店'=>'药房药妆店',
            '品牌专卖店'=>'品牌专卖店',
            '日化超市'=>'日化超市',
            '母婴专营店'=>'母婴专营店',
            '精品鞋店'=>'精品鞋店',
            '品牌厨具店'=>'品牌厨具店',
            '潮流饰品店'=>'潮流饰品店',
            '高档珠宝店'=>'高档珠宝店',
            '高档珠宝钟表店'=>'高档珠宝钟表店',
            '数码家电城'=>'数码家电城',
            '综合小数码'=>'综合小数码',
            '时尚家居店'=>'时尚家居店',
            '百货商场'=>'百货商场',
            '精品眼镜店'=>'精品眼镜店',
            '综合运动品牌店'=>'综合运动品牌店',
            '综合运动户外店'=>'综合运动户外店',
            '儿童玩具店'=>'儿童玩具店',
            '儿童服装店'=>'儿童服装店',
            '综合儿童用品商场'=>'综合儿童用品商场',
            '便民超市'=>'便民超市',
            '精品男装店'=>'精品男装店',
            '精品女装店'=>'精品女装店',
            '精品服装店'=>'精品服装店',
        ];



        $form = $this->createFormBuilder($shop)
            ->add('shopName', TextType::class, [
                'attr'=>['class'=>'form-group col-lg-10'],
                'label'=>'Shop Name :',
                'label_attr'=>['class'=>'form-control col-lg-2 control-label']
            ])
            ->add('shopEmail', EmailType::class, [
                'attr'=>['class'=>'form-group col-lg-10'],
                'label'=>'Email :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('telefon', TextType::class, [
                'attr'=>['class'=>'form-group col-lg-10'],
                'label'=>'Tel :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('address', TextType::class, [
                'attr'=>['class'=>'form-group col-lg-10'],
                'label'=>'Address :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('web', TextType::class, [
                'attr'=>['class'=>'form-group col-lg-10'],
                'label'=>'Web :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('overview', TextareaType::class, [
                'attr'=>['class'=>'form-group col-lg-10','rows'=>'3'],
                'label'=>'Company / Shop overview :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('payment', ChoiceType::class, [
                'choices' => $payment,
                'multiple' => true,
                'expanded' => true
            ])
            ->add('shopType', ChoiceType::class, [
                'choices' => $type,
                'placeholder' => 'Choose an option',
                'attr'=>['class'=>'form-group col-lg-10','style'=>'color:black;'],
                'label'=>'Type :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('suffix', ChoiceType::class, [
                'choices' => $suffix,
                'placeholder' => 'Choose an option',
                'attr'=>['class'=>'form-group col-lg-10','style'=>'color:black;'],
                'label'=>'Suffix :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('brand', CollectionType::class, [
                'entry_type'   => TextareaType::class,
                'entry_options' => [
                    'label' => '请按照分类填写品牌名称:',
                ],
                'label'=>'按分类输入品牌 :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('openingHours', CollectionType::class, [
                'entry_type'   => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'required' => false,
                'label'=>'Opening Hours :',
                'label_attr'=>['class'=>'col-lg-2 control-label']
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Create Shop',
                'attr' =>['class'=>'btn btn-primary']
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // perform some action, such as saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($shop);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/create.html.twig',[
            'form' => $form->createView()

        ]);

    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        $shops = $this->getDoctrine()
            ->getRepository('AppBundle:Shop')
            ->findAll();

        return $this->render('default/admin.html.twig',[
            'shops'=>$shops
        ]);
    }

    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontaktAction()
    {
        return $this->render('default/kontakt.html.twig');
    }
}
