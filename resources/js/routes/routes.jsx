import {
    createBrowserRouter,
  } from "react-router-dom";
  export const router = createBrowserRouter([
    {
      path: "/",
      element: <div>Parent Layout</div>,
      children: [
        {
          path: '/',
          element:<div>Children Pages</div>,
        },
      ]
    },
  ]);
  