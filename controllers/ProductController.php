<?php
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/CategoryModel.php';
require_once __DIR__ . '/../models/ReviewModel.php'; 

class ProductController {
    public function index() {
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();
        
        $search = $_GET['search'] ?? null;
        $categoryId = $_GET['category_id'] ?? null;
        $sort = $_GET['sort'] ?? 'all';
        
        if ($search) {
            $products = $productModel->searchProducts($search);
            $title = "Результати пошуку: $search";
        } elseif ($categoryId) {
            $products = $productModel->getProductsByCategory($categoryId);
            $category = $categoryModel->getCategoryById($categoryId);
            $title = "Категорія: " . htmlspecialchars($category['CategoryName']);
        } elseif ($sort == 'high_range') {
            $products = $productModel->getProductsByPriceRange(2000, 5000, 'DESC');
            $title = "Найдорожчі товари від 2000 до 5000 грн";
        } elseif ($sort == 'low_range') {
            $products = $productModel->getProductsByPriceRange(250, 2000, 'ASC');
            $title = "Найдешевші товари від 250 до 2000 грн";
        } else {
            $products = $productModel->getAllProducts();
            $title = "Всі товари";
        }
        
        $categories = $categoryModel->getAllCategories();
        include(__DIR__ . '/../views/product/index.php');
    }
    
    public function detail($id) {
        $productModel = new ProductModel();
        $reviewModel = new ReviewModel();
        
        $product = $productModel->getProductById($id);
        $reviews = $reviewModel->getReviewsByProduct($id);
        $averageRating = $reviewModel->getAverageRating($id);
        
        include(__DIR__ . '/../views/product/detail.php');
    }
}