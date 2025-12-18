# Flutter Posts App - Assignment

Build a Flutter app that displays posts from an API with **listing**, **search**, and **pagination**.

## Requirements

### 1. Post Listing
- Show posts in a scrollable list
- Each post card displays: image, title, description, date
- Handle image loading with placeholder

### 2. Search
- Search bar to filter posts by title/description
- Debounce search (wait 500ms after typing stops)
- Show "No results" when empty

### 3. Pagination
- Load 10 posts per page
- Infinite scroll or "Load More" button
- Show loading indicator when fetching more

### 4. Error & Loading States
- Loading indicator on initial load
- Error message with retry button
- Empty state handling

## API Details

**Base URL**: `https://flutter.adamsabbah.com/api`

**Endpoint**: `GET /posts`

**Parameters**:
- `page` (integer, default: 1) - Page number
- `per_page` (integer, default: 10) - Items per page
- `search` (string, optional) - Search term

**Example**:
```
GET https://flutter.adamsabbah.com/api/posts?page=1&per_page=10&search=sample
```

**Response**:
```json
{
  "data": [
    {
      "id": 1,
      "title": "Post Title",
      "description": "Post description",
      "image": "https://example.com/image.jpg",
      "created_at": "2025-12-16T10:30:00.000000Z",
      "updated_at": "2025-12-16T10:30:00.000000Z"
    }
  ],
  "current_page": 1,
  "last_page": 5,
  "per_page": 10,
  "total": 42
}
```

## Technical Notes

- Use `http` or `dio` for API calls
- Use state management (Provider/Riverpod/Bloc)
- Use `cached_network_image` for images
- Follow Flutter best practices
- Handle null safety properly

## Deliverables

1. Complete Flutter project (GitHub repository)
2. README with setup instructions
3. APK file or build instructions
4. Screenshots showing:
   - Posts list
   - Search functionality
   - Loading states
   - Error handling

## Bonus (Optional)

- Pull to refresh
- Dark mode
- Post detail screen
- Offline caching

## Evaluation

- **Functionality** (40%): Features work correctly
- **Code Quality** (25%): Clean, well-structured code
- **UI/UX** (20%): Modern, intuitive design
- **Error Handling** (10%): Proper edge case handling
- **Performance** (5%): Smooth scrolling

---

**API Base URL**: `https://flutter.adamsabbah.com/api`

Good luck! 🚀
